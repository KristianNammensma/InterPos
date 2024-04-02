<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;

use App\Models\Attribute;

use App\Models\Product;


use \Livewire\Attributes\Rule;

class Create extends baseAttributeController
{

  public $lastproductID;

  public $selectedProducts = [];

  public function createAttribute()
  {

    $this->validate($this->rules(), $this->messages());



      $attribute = Attribute::create([
          'name' => $this->name,
          'description' => $this->description,
          'price' => $this->price ?? 0.00,
          'status' => $this->status,
          'parentId' => $this->parentId ,
      ]);

      $attribute->products()->sync($this->selectedProducts);

      $this->reset(['name', 'description', 'productId']);

      session()->flash('success', 'Attribute made!');
  }


public function render()
{
    $this->Lastproduct= Product::latest()->first();
    $this->allProducts= Product::latest()->get();
    $this->allAttributes= Attribute::latest()->get();
    return view('livewire.Admin.Attribute.create');
}


}
