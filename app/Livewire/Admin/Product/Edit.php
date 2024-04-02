<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\Attributes\Rule;

class Edit extends baseProductController
{
  public $productID;

  public $selectedCategories = [];
  public $productCategoryIds;


    public function cancelEdit()
    {
        return redirect()->to("/Product-all");
    }

    public function update($productID)
    {
      $selectedCategoryIds = $this->selectedCategories;

      $product = Product::find($this->productID);

      $categoriesToAdd = array_diff($selectedCategoryIds, $this->productCategoryIds);
      $categoriesToRemove = array_diff($this->productCategoryIds, $selectedCategoryIds);

      // Voeg nieuwe categorieën toe aan het product
      foreach ($categoriesToAdd as $categoryId) {
          $product->categories()->attach($categoryId);
      }

      // Verwijder categorieën die niet meer zijn geselecteerd
      foreach ($categoriesToRemove as $categoryId) {
          $product->categories()->detach($categoryId);
      }

      $this->validate($this->rules(), $this->messages());

        $this->updateProduct($productID);

        return redirect()->to("/Product-all");
    }


    public function render()
    {
        $this->edit($this->productID);

        $product = Product::find($this->productID);

        $this->productCategoryIds = $product->categories()->pluck('category_id')->toArray();
        $this->selectedCategories = $this->productCategoryIds;

        $productCategoryIds = $this->productCategoryIds;

        $categories = Category::Latest()->get();
        return view('livewire.Admin.Product.edit', compact('product', 'categories', 'productCategoryIds'));
    }
}
