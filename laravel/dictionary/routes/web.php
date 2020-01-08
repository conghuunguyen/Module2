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

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function(Request $request){
    $arr=['hello'=>'xin chao', 'cat'=>'meo','dog'=>'cho', 'chicken'=>'ga'];
    $name= $request->input('name');
    if(in_array($name,$arr)){
        $result=array_search($name, $arr);
    } else if(key_exists($name, $arr)){
        $result = $arr[$name];
    } else {
        $result = 'Khong tim thay';
    }

    return view('resultDic', compact('result'));

});