<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class UserCategoryController extends Controller
{
    Public function show($id){
      $products = Category::find($id)->Product;
      $categories = Category::all();
      // $categories = Category::all();
      return view('pages.cat',compact(['products','categories']));	
    }
}
