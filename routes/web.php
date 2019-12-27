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

Route::get('/', function () {
    return view('welcome');
});

Route::get('results', function(){
    return view('results');
});

Route::post('/', function(\Illuminate\Http\Request $request){
    $product = \App\Product::find($request->input('product_id'));
    $product->stock = $request->input('stock');
    $product->save();

    return redirect('/');
})->name('actualizar');
