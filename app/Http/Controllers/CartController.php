<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index(){
      return view('pages.cart');
	}

     public function create(Request $request)
    {   //get the product id
        $id = $request->id;

        //find the product
        $product = Product::find($id);

        //get the product name,price,quantity,image and add to cart
        Cart::add($id,$product->productName,1,$product->Price,['image'=>$product->image]);
    }
}
