<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function list()
  {
   //dd("Hello product");

   return view('backend.layouts.product.list');

    
  }
}
