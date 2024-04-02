<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

use App\Models\Product;
use App\Models\Category;


use \Livewire\Attributes\Rule;
use Livewire\WithPagination;


class ProductController extends baseProductController
{
  public $productID;


  public function delete($productID)
  {
    $product = Product::find($productID);

    // Verwijder alle gerelateerde productcategorieën
    $product->categories()->detach();

    $product->delete();
  }

  public function quickEdit($productID)
  {

      $this->edit($productID);

  }

  public function cancelEdit()
  {
    $this->reset('editingProductID', 'name', 'status',
    'price', 'salesPrice',
    'vat'
    );
  }

  public function update($productID)
  {
    $this->updateProduct($productID);
  }


  public function clone($productID)
  {
    $originalProduct = Product::find($productID);

    $clonedProduct = $originalProduct->replicate();

    $clonedProduct->save();

    session()->flash('success', 'Product Cloned!');
  }


  public function goToAnotherPage($productID)
  {
      return redirect()->to("/Product-edit/{$productID}");
  }

  public function createRoute()
  {
    return redirect()->to("/Product-create");
  }

  public function render()
  {
    $products = Product::latest()->where('name', 'like', "%{$this->search}%")->paginate(5);

    return view('livewire.Admin.Product.product-controller',[
      'products' => $products,
  ]);
  }
}
