<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Attribute;

class Attributes extends Controller
{
  public function index()
  {

    return view('admin.attribute.allAttribute');
  }
  public function create()
  {
    return view('admin.attribute.newAttribute');
  }
  public function edit(Request $request, $variable)
  {

    $attributeID = $variable;

    $editAttribute = Attribute::find($attributeID);

    return view('admin.attribute.editAttribute', [
      'attributeID' => $attributeID,
      'attribute' => $editAttribute,
    ]);
  }
}
