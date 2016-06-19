<?php

use App\Product;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
     $products = Product::orderBy('created_at', 'asc')->get();
     return view('products', [
        'products' => $products
    ]); 
});

Route::get('/product/create', function () {
     return view('product-create');
});

Route::post('/product', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'description' => 'required',
        'price' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $product = new Product;
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->discount = $request->discount;
    $product->save();

    return redirect('/');
});

Route::delete('/product/{product}', function(Product $product) {
  $product->delete();

  return redirect('/');
});
