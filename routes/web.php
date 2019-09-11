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
use App\Mail\DemoMail;
use App\Product;
use App\Slide;
use Illuminate\Support\Facades\Mail;

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/*giao diện client*/
Route::get('/about',function (){
    return view('client.about');
});
Route::get('/',function (){
    return view('client.home');
});
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

Route::get('search',[
    'as'=>'search',
    'uses'=>'ProductController@getSearch',
]);
Route::get('search_home',[
    'as'=>'search_home',
    'uses'=>'ProductController@getSearch_home',
]);

//test
Route::get('/send', function () {

    Mail::to('demo@gmail.com')->send(new DemoMail());

    return 'A message has been sent to Mailtrap!';

});