<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class Products extends Controller
{
  public function index()
  {
    return view('admin.product.allProduct');
  }
  public function create()
  {
    return view('admin.product.newProduct');
  }
  public function edit(Request $request, $variable)
  {

    $productID = $variable;

    $editProduct = Product::find($productID);


    return view('admin.product.editProduct', [
      'productID' => $productID,
      'product' => $editProduct,
    ]);
  }

  public function categoryEdit(Request $request, $variable)
  {

    $categoryID = $variable;

    $editCategory = Category::find($categoryID);


    return view('Admin.Product.editCategory', [
      'categoryID' => $categoryID,
      'category' => $editCategory,
    ]);
  }


  public function category()
  {
    return view('admin.product.categoryList');
  }
}
