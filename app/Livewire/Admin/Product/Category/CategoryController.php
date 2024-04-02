<?php

namespace App\Livewire\Admin\Product\Category;

use Livewire\Component;

use App\Models\Category;

use App\Livewire\Admin\baseController;

use \Livewire\Attributes\Rule;
use Livewire\WithPagination;

class CategoryController extends baseController
{
  public $editingCategoryID;

  public function quickEdit($categoryID)
  {

    $this->editingCategoryID = $categoryID;
    $this->name = Category::find($categoryID)->name;
    $this->status = Category::find($categoryID)->status;
    $this->description = Category::find($categoryID)->description;
  }


  public function updateCategory($categoryID)
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
    $this->reset('editingCategoryID', 'name', 'status'
    );
  }

  public function clone($categoryID)
  {
    $originalCategory = Category::find($categoryID);

    $clonedCategory = $originalCategory->replicate();

    $clonedCategory->save();

    session()->flash('success', 'Category Cloned!');
  }

  public function delete($categoryID)
  {
    $category = Category::find($categoryID);

    // Verwijder alle gerelateerde productcategorieën
    $category->products()->detach();

    $category->delete();
  }

  public function createCategory()
  {
    // $this->validate($this->rules(), $this->messages());

    Category::create([
          'name' => $this->name,
          'description' => $this->description,
          'status' => $this->status,
      ]);

      $this->reset(['name', 'description', 'description']);

      session()->flash('success', 'Category made!');
  }

  public function goToAnotherPage($categoryID)
  {
      return redirect()->to("/Category-edit/{$categoryID}");
  }

    public function render()
    {
      $category = Category::latest()->where('name', 'like', "%{$this->search}%")->paginate(5);
        return view('livewire.Admin.Product.Category.category-controller', compact('category'));
    }
}
