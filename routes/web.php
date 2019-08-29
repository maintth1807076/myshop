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

/*route test authen authorization*/
Route::get('/guest', function () {
    return "Hello Guest";
});
Route::get('/user', function () {
    return "Hello User";
})->middleware('auth');
Route::get('/admin', function () {
    return "Hello Admin";
})->middleware('role:admin');
/*route test upload ảnh cloud*/
Route::get('/admin/image/create','DemoImageUploadController@create');
Route::post('/admin/image','DemoImageUploadController@upload');
/*route test luồng crud*/
/*route test relationship table*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*show layout admin*/
Route::get('/admin/layout', function () {
    return view('admin.layout');
});
Route::get('/admin/layout/form', function () {
    return view('admin.product.form');
});
Route::get('/admin/layout/list', function () {
    return view('admin.product.list');
});
/*giao diện client*/
Route::get('/about',function (){
    return view('client.about');
});
Route::get('/',function (){
    return view('client.home');
});
Route::get('/contact', function (){
    return view('client.contact');
});
Route::get('/detail', function () {
    return view('client.detail-product');
});
Route::get('/product', function () {
    return view('layouts.client.category-product');
});



