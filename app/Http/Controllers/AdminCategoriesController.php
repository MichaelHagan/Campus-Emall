<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use App\Product;

class AdminCategoriesController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    public function index(){
    	$categorys = Category::all();
    	return view('admin.pages.categories',compact('categorys'));
    }

    Public function store(Request $request){
      $this->validate($request,array(
      		'text' => "required"
      ));

      $category = new Category();
      $category->name = $request->text;
      $category->save();
      // Session::flash('success','Your post was successfully sent');
    }
    // Public function show($id){
    //   $products = Category::find($id)->product;
    //   // $categories = Category::all();
    //   return view('pages.cat',compact('products'));	
    // }

    public function Update(Request $request){
     $category = Category::find($request->id);
     $category->name = $request->text;
     $category->save();
    }

    public function destroy(Request $request){
    	$category = Category::where('id',$request->id);
    	$category->delete();
    }
}
