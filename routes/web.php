<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Product;
Route::get('/', function () {
	//get the authenticate user    
    $user=Auth::User(); 
    //get 10 products from the products table
    $products = Product::all();
    return view('welcome1',compact(['user','products']));
})->name('welcome');


Route::get('/shop','ShopController@index')->name('shop');
Route::get('/cart', function () {
    return view('pages/cart1');
});
Route::get('/dashboard',function(){
    return view('admin.dashboard');
})->name('dashboard');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('shop/category','ShopController@show')->name('shop.cat');



//Admin Category routes
Route::get('/category','AdminCategoriesController@index')->name('category');
Route::post('/category/store','AdminCategoriesController@store')->name('category.store');
Route::post('/category/destroy','AdminCategoriesController@destroy')->name('category.delete');
Route::post('update/category','AdminCategoriesController@Update')->name('category.update');

//Admin Product routes
Route::get('/product','AdminProductController@index')->name('product');
Route::post('create/product','AdminProductController@store')->name('create.product');
Route::get('delete/product/{product_id}','AdminProductController@destroy')->name('delete.product');
Route::post('/update/product','AdminProductController@update')->name('update.product');
Route::post('cart','AdminProductController@add');


//User category routes
Route::get('category/show/{category_id}','UserCategoryController@show')->name('category.show');

//Cart Controller
Route::post('/cart/create','CartController@create')->name('cart.create');
Route::get('cart/index','CartController@index')->name('cart.index');
