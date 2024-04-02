<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;

use App\Models\Attribute;
use App\Models\Product;

use Livewire\Attributes\Rule;

class Edit extends baseAttributeController
{
  public $attributeID;
  public $allAttributes;
  public $allProducts;

  public $selectedProducts = [];
  public $attributeProductIds;


  public function cancelEdit()
  {
      return redirect()->to("/Attribute-all");
  }

  public function update($attributeID)
  {
    $selectedProductIds = $this->selectedProducts;

    $attribute = Attribute::find($this->attributeID);

    $productsToAdd = array_diff($selectedProductIds, $this->attributeProductIds);
    $productsToRemove = array_diff($this->attributeProductIds, $selectedProductIds);

    // Voeg nieuwe categorieën toe aan het product
    foreach ($productsToAdd as $categoryId) {
        $attribute->products()->attach($categoryId);
    }

    // Verwijder categorieën die niet meer zijn geselecteerd
    foreach ($productsToRemove as $categoryId) {
        $attribute->products()->detach($categoryId);
    }

    $this->validate($this->rules(), $this->messages());

      $this->updateAttribute($attributeID);

      return redirect()->to("/Attribute-all");
  }


    public function render()
    {
      $this->edit($this->attributeID);
      $attribute = Attribute::find($this->attributeID);

      $this->allAttributes = Attribute::latest()->get();
      $this->allProducts = Product::latest()->get();

      $this->attributeProductIds = $attribute->products()->pluck('product_id')->toArray();
      $this->selectedProducts = $this->attributeProductIds;

        return view('livewire.Admin.Attribute.edit',
        [
          'attribute' => $attribute,
          'allAttributes' => $this->allAttributes,
          'allProducts' => $this->allProducts

      ]);
    }
}
