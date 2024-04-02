<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Orders extends Controller
{
  public function index()
  {

    return view('admin.order.allOrder');
  }
  public function create()
  {
    return view('admin.order.newOrder');
  }
}
