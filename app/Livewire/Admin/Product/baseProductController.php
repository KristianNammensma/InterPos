<?php

namespace App\Livewire\Admin\Product;



use App\Models\Product;

use App\Livewire\Admin\baseController;

use \Livewire\Attributes\Rule;
use Livewire\Component as LivewireComponent;
use Livewire\WithPagination;


class baseProductController extends baseController
{
    public $editingProductID;
    public $productID;


    public function checkCreateVAT()
    {
      $this->vat = $this->vatValue === 21 ? true : false;


    }
    public function checkUpdateVAT()
    {
      $this->vatValue = $this->vat === true ? 21 : 0;
    }


    public function edit($productID)
    {

        $this->editingProductID = $productID;
        $this->name = Product::find($productID)->name;
        $this->description = Product::find($productID)->description;
        $this->status = Product::find($productID)->status;
        $this->price = Product::find($productID)->price;
        $this->salesPrice = Product::find($productID)->salesPrice;
        $this->vatValue = Product::find($productID)->vat;

        $this->checkCreateVAT();
    }

    public function updateProduct($productID)
    {
        $this->checkUpdateVAT();

        $this->validate($this->rules(), $this->messages());

        Product::find($productID)->update([
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
            'price' => $this->price,
            'salesPrice' => $this->salesPrice,
            'vat' => $this->vatValue,
        ]);

        $this->cancelEdit();
      }

    // You can include any common methods or lifecycle hooks here
}
