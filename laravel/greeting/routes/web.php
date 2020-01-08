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

// Route::get('/', function () {
//     $name = 'huu';
//     $age = 23;
//     $student = ['hoang',' tan', 'nguyen'];
//     return view('Welcome', ['name' => $name, 'age'=> $age, 'student'=>$student]);
// });

// Route::get('/huu', function (request $request) {

//     $name = $request->input('name');
    
//     return view('Welcome1', ['name' => $name]);
// });
Route::get('/login', function() {
    return view('login');
});

Route::post('/login', function(Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');

});
