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

use App\Category;
use App\Product;
use App\Slide;

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
//Route::get('/',function (){
//    return view('client.home');
//});
Route::get('/home',function (){
    $data = [
        'list_slide' => Slide::all(),
        'list_product_hot' => Product::all(),
        'list_category' => Category::all()
    ];
    return view('client.home', $data);
});
Route::get('/',function (){
    $data = [
        'list_product_hot' => Product::all(),
        'list_category' => Category::all()
    ];
    return view('client.layout', $data);
});
Route::get('/contact', function (){
    return view('client.contact');
});
Route::get('/product/{product}', function ($id) {
    $data = [
        'list_category' => Category::all(),
        'item' => Product::find($id),
        'list_product_detail' => Product::find($id)->productDetail
    ];
    return view('client.detail-product', $data);
});
Route::get('/category/{category}', function ($id) {
    $data = [
        'list_category' => Category::all(),
        'item' => Category::find($id),
        'list_product' => Category::find($id)->products
    ];
    return view('client.product', $data);
});
/*route user*/
Route::get('/information', 'UserController@show');
Route::post('/change-name', 'UserController@changeName');
Route::post('/change-avatar', 'UserController@changeAvatar');
/*route admin*/
Route::get('/admin', function () {
    return view('admin.layout');
});
Route::resource('/admin/categories','CategoryController');
Route::post('/admin/categories/change-status','CategoryController@changeStatus');
Route::resource('/admin/products','ProductController');
Route::post('/admin/products/change-status','ProductController@changeStatus');
Route::resource('/admin/slides','SlideController');


Route::get('test','GuestController@showForm');
Route::post('test','GuestController@filterByName');
Route::get('search',[
    'as'=>'search',
    'uses'=>'ProductController@getSearch',
]);