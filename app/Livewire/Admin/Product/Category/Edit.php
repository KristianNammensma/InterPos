<?php

namespace App\Livewire\Admin\Product\Category;

use Livewire\Component;

use App\Models\Category;

use App\Livewire\Admin\baseController;

class Edit extends baseController
{
  public $categoryID;

  public $editingCategoryID;


  public function update($categoryID)
  {

      Category::find($categoryID)->update([
          'name' => $this->name,
          'description' => $this->description,
          'status' => $this->status,
      ]);

      $this->cancelEdit();
  }

  public function cancelEdit()
  {
      return redirect()->to("/Product-category");
  }


    public function render()
    {


      $this->editingCategoryID = $this->categoryID;
      $this->name = Category::find($this->categoryID)->name;
      $this->status = Category::find($this->categoryID)->status;
      $this->description = Category::find($this->categoryID)->description;

      $category = Category::find($this->categoryID);

        return view('livewire.Admin.Product.Category.edit', compact('category'));
    }
}
