<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\Admin\HomePage;
use App\Http\Controllers\Admin\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;


use App\Http\Controllers\Admin\Products;
use App\Http\Controllers\Admin\Attributes;
use App\Http\Controllers\Admin\Orders;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');

// Product Routes
Route::get('/Product-all', [Products::class, 'index'])->name('Product-all');
Route::get('/Product-create', [Products::class, 'create'])->name('Product-create');
//product sub route
  Route::get('/Product-edit/{variable}', [Products::class, 'edit'])->name('Products-edit');

Route::get('/Product-category', [Products::class, 'category'])->name('Product-category');
  //product sub route
  Route::get('/Category-edit/{variable}', [Products::class, 'categoryEdit'])->name('Category-edit');


//attributes Routes
Route::get('/Attribute-all', [Attributes::class, 'index'])->name('Attribute-all');
Route::get('/Attribute-create', [Attributes::class, 'create'])->name('Attribute-create');
//attribute sub route
  Route::get('/Attribute-edit/{variable}', [Attributes::class, 'edit'])->name('Attribute-edit');

//order Routes
Route::get('/Order-all', [Orders::class, 'index'])->name('Order-all');
Route::get('/Order-create', [Orders::class, 'create'])->name('Order-create');

// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// pages
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
