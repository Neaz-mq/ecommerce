<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

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

      // left - coloumn name  || right - input field name of form
    // dd($request->all());

    Category::create([

      'name'=>$request->category_name,
      'details'=>$request->description


    ]

    );

    return redirect()->back();
     
    }
    

}
