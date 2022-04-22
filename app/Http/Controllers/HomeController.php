<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        
        //dd("hello");

      $title='Dashboard';
      $link='Dashboard/home';
        return view('backend.layouts.home',compact('title','link'));
    }
    public function contact(){
        
        //dd("contact");

        return view('backend.layouts.contact');
    }
    
    
}
