<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;

use App\Models\Attribute;

use App\Models\Product;

use Livewire\WithPagination;

use \Livewire\Attributes\Rule;

class AttributeController extends baseAttributeController
{
    public $search;

    public $attributeTitle = 'Hoofd eigenschappen';
    public $isSub = false;
    public $mainId;
    public $mainName;
    public $attributeID;

    public function subAttribute($mainId, $mainName)
    {
      $this->isSub = true;
      $this->mainId = $mainId;
      $this->mainName = $mainName;
      $this->attributeTitle = 'Sub eigenschappen';
    }

    public function quickEdit($attributeID)
    {
        $this->edit($attributeID);
    }

    public function cancelEdit()
    {
      $this->reset('editingAttributeID', 'name', 'status',
      'price', 'productId',
      'parentId'
      );
    }

    public function delete($attributeID)
    {
      Attribute::find($attributeID)->delete();
    }

    public function update($attributeID)
    {
      $this->updateAttribute($attributeID);
    }

    public function clone($attributeID)
    {
      $originalProduct = Attribute::find($attributeID);

      $clonedProduct = $originalProduct->replicate();

      $clonedProduct->save();

      session()->flash('success', 'Product Cloned!');
    }

    public function back()
    {
      return redirect()->to("/Attribute-all");
    }

    public function createRoute()
    {
      return redirect()->to("/Attribute-create");
    }

    public function goToAnotherPage($attributeID)
    {
        return redirect()->to("/Attribute-edit/{$attributeID}");
    }


    public function render()
    {
      $Attribute = Attribute::latest()->where('name', 'like', "%{$this->search}%")->paginate(5);

      $this->allProducts= Product::latest()->get();

        return view('livewire.Admin.Attribute.attribute-controller',[
          'Attribute' => $Attribute,

      ]);
    }
}
