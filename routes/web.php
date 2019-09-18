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

use App\Category;
use App\Mail\DemoMail;
use App\Product;
use App\Slide;
use Illuminate\Support\Facades\Mail;

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/*route guest*/
Route::get('/', function () {
    $data = [
        'list_slide' => Slide::whereNotIn('status', [-1])->get(),
        'list_product_hot' => Product::orderBy('created_at', 'DESC')->limit(4)->get(),
        'list_category' => Category::all()
    ];
    return view('client.home', $data);
});
Route::get('/home', function () {
    $data = [
        'list_slide' => Slide::whereNotIn('status', [-1])->get(),
        'list_product_hot' => Product::orderBy('created_at', 'DESC')->limit(4)->get(),
        'list_category' => Category::all()
    ];
    return view('client.home', $data);
});
Route::post('/home','GuestController@loadMore');
Route::get('/about', function () {
    return view('client.about');
});
Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/product/{product}', function ($id) {
    $data = [
        'list_category' => Category::all(),
        'product' => Product::find($id),
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
//Route::get('search', function (Request $request) {
//    $data = [
//        'list_product' => Product::where('name', 'like', '%' . $request->get('keyword') . '%')->get()
//    ];
//    return $data;
//});
/*route user*/
Route::get('/information', 'UserController@show')->middleware('auth');
Route::post('/change-name', 'UserController@changeName')->middleware('auth');
Route::post('/change-avatar', 'UserController@changeAvatar')->middleware('auth');
/*route admin*/
Route::get('/user/{user}', function ($id) {
    $data = [
        'list_User' => User::whereNotIn('status', [-1])->get(),
        'item' => User::find($id),
    ];
    return view('client.product', $data);
});
//route admin_user
Route::resource('/admin/user','quanliUserController'
)->middleware('role:admin');
Route::post('/admin/user/change-status', 'quanliUserController@changeStatus')->middleware('role:admin');
//end Route adin_user
Route::get('/admin', function () {
    return view('admin.layout');
})->middleware('role:admin');
Route::resource('/admin/categories', 'CategoryController')->middleware('role:admin');
Route::post('/admin/categories/change-status', 'CategoryController@changeStatus')->middleware('role:admin');
Route::resource('/admin/products', 'ProductController')->middleware('role:admin');
Route::post('/admin/products/change-status', 'ProductController@changeStatus')->middleware('role:admin');
Route::resource('/admin/slides', 'SlideController')->middleware('role:admin');
Route::post('/admin/slides/change-status', 'ProductController@changeStatus')->middleware('role:admin');

//test
Route::get('/send', function () {

    Mail::to('demo@gmail.com')->send(new DemoMail());

    return 'A message has been sent to Mailtrap!';

});
Route::get('/cart', function () {
    return view('search');
});


