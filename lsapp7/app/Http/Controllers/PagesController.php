<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
       
       return view('main');
    }
    public function about()
    {
        
        $services=[
            'c',
            'c++',
            'php',
            'JAVA'
        ];
    
        return view('about')->with('name',$services);
    }
    public function contact()
    {
       
       return view('contact');
    }
    public function blog()
    {
       
       return view('blog');
    }
}
