<?php

namespace App\Livewire\Admin\Order;

use Livewire\Component;

use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;

class Create extends Component
{


  public $products = [];
  public $selectedProductId;
  public $selectedProduct;
  public $selectedAttributes = [];


  public $showOffcanvas = false;

  public array $quantity = [];

  public function mount()
  {
    $this->products = Product::Latest()->get();

    foreach ($this->products as $product)
    {
      $this->quantity[$product->id] = 1;
    }
  }




  public function addToCart($productID)
  {
    // dd($productID);
    $this->dispatch('close-modal', name: 'test');

    $this->dispatch('addToCart', productID: $productID, quantity: $this->quantity);

    $this->dispatch(
      'alert',
      type: 'success',
      title: 'Cart Added',
      position: 'center',
      timer: 1000,
    );
  }


  public function close() {$this->dispatch('close-modal', name: 'test');}


  public function openCart()
  {
    $this->dispatch('Open');
  }


  public function selectProduct($productId)
  {

      $this->selectedProductId = $productId;
      $this->selectedProduct = Product::find($productId);
      $this->selectedAttributes =  $this->selectedProduct->attributes;

      $this->dispatch('open-modal', name: 'test');
  }


  public function sort($categoryID)
  {
    if($categoryID == 0)
    {
        $this->products = Product::Latest()->get();
        return $this->products;
    }

    $category = Category::find($categoryID);
    if (!$category) {
      return [];
    }

    // Haal alle producten op die aan deze categorie zijn gekoppeld
    $this->products = $category->products;

    // Stop de producten in een array
    return $this->products;
  }


    public function render()
    {

      $categories = Category::orderBy('created_at', 'asc')->get();
      $attributes = Attribute::Latest()->get();
        return view('livewire.Admin.Order.create', compact("categories", "attributes"));
    }
}
