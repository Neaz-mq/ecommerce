<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
    //    dd("Hello category");
      return view('backend.layouts.category.list');

    }

    public function create()
    {
     //dd("Hello create");
     return view('backend.layouts.category.create');

    }
    public function store(Request $request)
    {
     dd($request->all());
     
    }
    

}
