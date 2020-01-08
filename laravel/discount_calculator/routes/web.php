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
use Illuminate\Http\Request;
Route::get('/discount', function () {
    return view('discount');
});

Route::post('/discount', function(Request $request) {
    $des = $request->input('ProductDescription');
    $price= $request->input('ListPrice');
    $per = $request->input('DiscountPercent');
    $amount= $price*$per*0.01;
    $disPrice= $price-$amount;

    return view('show_discount_amount', compact(['des', 'price', 'per', 'amount', 'disPrice']));
});
