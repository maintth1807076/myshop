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

/*route test upload ảnh cloud*/
Route::get('/admin/image/create','DemoImageUploadController@create');
Route::post('/admin/image','DemoImageUploadController@upload');
/*route test luồng crud*/
/*route test relationship table*/
Route::get('/admin/products/create','ProductController@create');
Route::post('/admin/products','ProductController@upload');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*show layout admin*/
Route::get('/admin/layout', function () {
    return view('admin.layout');
});
Route::get('/admin/layout/form', function () {
    return view('admin.product.form');
})->middleware('role:admin');
Route::get('/admin/layout/list', function () {
    return view('admin.product.list');
})->middleware('role:admin');
/*giao diện client*/
Route::get('/about',function (){
    return view('client.about');
});
Route::get('/',function (){
    return view('client.home');
});
Route::get('/home',function (){
    return view('client.home');
});
Route::get('/contact', function (){
    return view('client.contact');
});
Route::get('/detail', function () {
    return view('client.detail-product');
});
Route::get('/product', function () {
    return view('client.product');
});
/*route user*/
Route::get('/information', 'UserController@show');
Route::post('/change-name', 'UserController@changeName');
Route::post('/change-avatar', 'UserController@changeAvatar');
/*route admin*/
Route::get('/admin', function () {
    return view('admin.layout');
})->middleware('role:admin');
Route::resource('/admin/categories','CategoryController')->middleware('role:admin');
Route::resource('/admin/products','ProductController')->middleware('role:admin');

Route::get('/lienket',function(){
    $data = App\Category::find(2)->products ->toArray();
//    var_dump($data);
    dd($data);
} );
//Route::get('/admin/products/create','ProductController@create');
//Route::post('/admin/products','ProductController@upload');
Route::get('search',[
    'as'=>'search',
    'uses'=>'ProductController@getSearch',
]);