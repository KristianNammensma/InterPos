<?php

namespace App\Livewire\Admin\Attribute;



use App\Models\Product;
use App\Models\Attribute;

use App\Livewire\Admin\baseController;

use \Livewire\Attributes\Rule;
use Livewire\Component as LivewireComponent;
use Livewire\WithPagination;


class baseAttributeController extends baseController
{

    public $Lastproduct;
    public $allProducts;
    public $allAttributes;
    public $attributeID;
    public $productId = 0;


    public $editingAttributeID;


    public function edit($attributeID)
    {

        $this->editingAttributeID = $attributeID;
        $this->name = Attribute::find($attributeID)->name;
        $this->status = Attribute::find($attributeID)->status;
        $this->description = Attribute::find($attributeID)->description;
        $this->price = Attribute::find($attributeID)->price;
        $this->parentId = Attribute::find($attributeID)->parentId;

    }

    public function updateAttribute($attributeID)
    {

        Attribute::find($attributeID)->update([
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
            'price' => $this->price,
            'parentId' => $this->parentId,
        ]);

        $this->validate($this->rules(), $this->messages());

        $this->cancelEdit();
      }

    // You can include any common methods or lifecycle hooks here
}
