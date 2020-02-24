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

// trang khách hàng đặt mua
Route::get('/', function () {
	return view('welcome');
});

Route::get('/trangchu', [
	'as' => 'trang-chu',
	'uses' => 'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}', [
	'as' => 'loaisanpham',
	'uses' => 'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}', [
	'as' => 'chitietsanpham',
	'uses' => 'PageController@getChitiet'
]);

Route::get('lien-he', [
	'as' => 'lienhe',
	'uses' => 'PageController@getLienHe'
]);

Route::get('gioi-thieu', [
	'as' => 'gioithieu',
	'uses' => 'PageController@getGioiThieu'
]);

Route::get('add-to-cart/{id}', [
	'as' => 'themgiohang',
	'uses' => 'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}', [
	'as' => 'xoagiohang',
	'uses' => 'PageController@getDelItemCart'
]);
Route::get('dat-hang', [
	'as' => 'dathang',
	'uses' => 'PageController@getCheckout'
]);

Route::post('dat-hang', [
	'as' => 'dathang',
	'uses' => 'PageController@postCheckout'
]);

Route::get('dang-nhap', [
	'as' => 'login',
	'uses' => 'PageController@getLogin'
]);
Route::post('dang-nhap', [
	'as' => 'login',
	'uses' => 'PageController@postLogin'
]);

Route::get('dang-ki', [
	'as' => 'signin',
	'uses' => 'PageController@getSignin'
]);

Route::post('dang-ki', [
	'as' => 'signin',
	'uses' => 'PageController@postSignin'
]);

Route::get('dang-xuat', [
	'as' => 'logout',
	'uses' => 'PageController@postLogout'
]);

Route::get('search', [
	'as' => 'search',
	'uses' => 'PageController@getSearch'
]);

// trang admin

Route::get('admin', [
	'as' => 'admin',
	'uses' => 'AdminController@index'
]);

Route::get('dashboard', [
	'as' => 'dashboard',
	'uses' => 'AdminController@show_dashboard'
])->middleware('auth');

Route::post('admin-dashboard', 'AdminController@dashboard');

Route::get('admin-logout', 'AdminController@admin_logout');


// trang quan li cua hang

Route::get('add-product', 'ProductController@add_product');
Route::get('edit-product/{id}', 'ProductController@edit_product');
Route::get('delete-product/{id}', 'ProductController@delete_product');
Route::get('all-product', 'ProductController@all_product');

Route::post('save-product', 'ProductController@save_product');
Route::post('update-product/{id}', 'ProductController@update_product');
Route::get('restore-product/{id}', 'ProductController@restore_product');

// xoa mem
Route::get('deleted', 'ProductController@deleted_product');

// quan li don hang

Route::get('manage-order', 'ProductController@manage_order');
Route::get('view-order/{id}', 'ProductController@view_order');



