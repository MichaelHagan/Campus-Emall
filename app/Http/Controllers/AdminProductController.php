<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Product;
use Illuminate\Support\Facades\File;
use Image;

class AdminProductController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    public function add(Request $request){
        return $request->all();
    }
    Public function index(){
        $categories = Category::all();
        $products = Product::all();
    	return view('admin.pages.product',compact(['categories','products']));
    }
    public function store(Request $request){
    	$this->validate($request,array(
            'product' => 'nullable',
            'price' => 'nullable',
            'discountedPrice' => 'nullable',
            'categoryId' => 'nullable',
            'available' => 'nullable',
            'description' => 'nullable',
            'image1' => 'nullable',
            'image2' => 'nullable',
            'image3' => 'nullable',
            'image4' => 'nullable',
        ));

        $product = new Product();
        $product->productName = $request->product;
        $product->Price = $request->price;
        $product->discount = $request->discountedPrice;
        $product->category_id = $request->categoryId;
        $product->available = $request->available;
        $product->description = $request->description;

        if($request->hasFile('image1')){
            $image1 = $request->file('image1');
            $filename1 = time()."first".".".$image1->getClientOriginalExtension();
            $location1 = public_path('images/'. $filename1);
            Image::make($image1)->resize(1905, 700)->save($location1);
            $product->image1 = $filename1;
        }
        if($request->hasFile('image2')){
          $image2 = $request->file('image2');
          $filename2 = time()."second".".".$image2->getClientOriginalExtension();
          $location2 = public_path('images/'. $filename2);
          Image::make($image2)->resize(136, 136)->save($location2);
          $product->image2 = $filename2;
        }
        if($request->hasFile('image3')){
            $image3 = $request->file('image3');
            $filename3 = time()."third".".".$image3->getClientOriginalExtension();
            $location3 = public_path('images/'. $filename3);
            Image::make($image3)->resize(136, 136)->save($location3);
            $product->image3 = $filename3;
        }
        if($request->hasFile('image4')){
           $image4 = $request->file('image4');  
           $filename4 = time()."fourth".".".$image4->getClientOriginalExtension();
           $location4 = public_path('images/'. $filename4);   
           Image::make($image4)->resize(136, 136)->save($location4);
           $product->image4 = $filename4;
        }
        $product->save();
    	return redirect()->back();
    }

    public function destroy($id){
        // $product = Product::where('id',$id);
        // $product->delete();
        return redirect()->back();
    }
    public function update(Request $request){
        
        $this->validate($request,array(
            'product' => 'nullable',
            'price' => 'nullable',
            'discountedPrice' => 'nullable',
            'categoryId' => 'nullable',
            'available' => 'nullable',
            'description' => 'nullable',
            'image1' => 'nullable',
            'image2' => 'nullable',
            'image3' => 'nullable',
            'image4' => 'nullable',
        ));
        $id = $request->id;
        $product = Product::find($id);
        $product->productName = $request->product;
        $product->Price = $request->price;
        $product->discount = $request->discountedPrice;
        $product->category_id = $request->categoryId;
        $product->available = $request->available;
        $product->description = $request->description;

        if($request->hasFile('image1')){
            $image1 = $request->file('image1');
            $filename1 = time()."first".".".$image1->getClientOriginalExtension();
            $location1 = public_path('images/'. $filename1);
            Image::make($image1)->resize(136, 136)->save($location1);
            $oldFilename1 = $product->image1;
            $product->image1 = $filename1;
            Storage::delete($oldFilename1);
        }if($request->hasFile('image2')){
          $image2 = $request->file('image2');
          $filename2 = time()."second".".".$image2->getClientOriginalExtension();
          $location2 = public_path('images/'. $filename2);
          Image::make($image2)->resize(136, 136)->save($location2);
          $oldFilename2 = $product->image2;
            $product->image2 = $filename2;
            Storage::delete($oldFilename2);
        }
        if($request->hasFile('image3')){
            $image3 = $request->file('image3');
            $filename3 = time()."third".".".$image3->getClientOriginalExtension();
            $location3 = public_path('images/'. $filename3);
            Image::make($image3)->resize(136, 136)->save($location3);
            $oldFilename3 = $product->image3;
            $product->image3 = $filename3;
            Storage::delete($oldFilename3);
        }
        if($request->hasFile('image4')){
           $image4 = $request->file('image4');  
           $filename4 = time()."fourth".".".$image4->getClientOriginalExtension();
           $location4 = public_path('images/'. $filename4);   
           Image::make($image4)->resize(136, 136)->save($location4);
           $oldFilename4 = $product->image4;
            $product->image4 = $filename4;
            Storage::delete($oldFilename4);
        }
         $product->save();
        return redirect()->back();
    }
}
