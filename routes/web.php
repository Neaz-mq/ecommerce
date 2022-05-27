<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('backend.layouts.home');
    
// });
// Route::get('/contact', function () {
//     return view('backend.layouts.contact');
    
// });

Route::get('/',[HomeController::class,'home']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

Route::get('/products',[ProductController::class,'list'])->name('product.list');