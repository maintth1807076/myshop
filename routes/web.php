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
Route::get('/guest', function () {
    return "Hello Guest";
});
Route::get('/user', function () {
    return "Hello User";
})->middleware('auth');
Route::get('/admin', function () {
    return "Hello Admin";
})->middleware('role:admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
