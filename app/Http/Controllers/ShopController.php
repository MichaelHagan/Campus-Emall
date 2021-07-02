<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Category;

class ShopController extends Controller
{
    public function index(){
    	//get the authenticate user    
          // $user=Auth::User(); 
          $categories = Category::all();
          return view('pages.shop',compact('categories'));
    }
    public function show($id){
          return view('pages.cat');
    }

    Public function show1(){

    }
}
