<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

use App\Models\Product;

use App\Models\Category;

use \Livewire\Attributes\Rule;


class Create extends baseProductController
{
  protected $rules;

  public $message;

  public $selectedCategories = [];

  public function createProduct()
  {

      $this->validate($this->rules(), $this->messages());

      $this->checkCreateVAT();

      $product = Product::create([
          'name' => $this->name,
          'status' => $this->status,
          'price' => $this->price,
          'salesPrice' => $this->salesPrice,
          'description' => $this->description,
          'vat' => $this->vatValue,
      ]);



      $product->categories()->sync($this->selectedCategories);

      $this->reset(['name', 'price', 'status', 'salesPrice', 'description', 'vat', 'selectedCategories']);

      session()->flash('success', 'Product Added!');
  }

  public function render()
  {
      $categories = Category::Latest()->get();
      return view('livewire.Admin.Product.create', compact('categories'));
  }
}
