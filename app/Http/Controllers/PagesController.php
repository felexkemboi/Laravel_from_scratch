<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('welcome', [
      'foo' => 'bar'
    ]);

    }


    public function about(){
    	return view('welcome', [
      'foo' => 'bar'
    ]);
    	
    }


    public function contact(){
    	return view('welcome', [
      'foo' => 'bar'
    ]);
    	
    }
}
