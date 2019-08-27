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
Route::get('/client/abouts',function (){
    return view('layouts.client.about-us');
});
Route::get('/client/login',function (){
    return view('layouts.client.login');
});
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