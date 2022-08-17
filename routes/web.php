<?php

use App\Http\Middleware\adminAuth;
use App\Mail\ContactMail;
use App\Models\User;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
Route::get('/products', 'App\Http\Controllers\HomeController@productPage')->name('product_page');
Route::get('/products/detail/{product}', 'App\Http\Controllers\HomeController@productDetailPage')->name('product_detail_page');
Route::get('/events', 'App\Http\Controllers\HomeController@event')->name('events');


Route::get('/login', function () {
    return view('admin2.login');
});
Route::post('/show-category-product', 'App\Http\Controllers\ProductController@showCategoryProduct')->name('show_category_product');
Route::post('/showless-category-product', 'App\Http\Controllers\ProductController@showlessCategoryProduct')->name('showless_category_product');
Route::post('is_admin', 'App\Http\Controllers\LoginController@isadmin')->name('is_admin');

// Route::group(['middleware' => 'adminAuth'], function () {
Route::get('/admin', function () {
    return view('Category.create_category');
});



Route::get('logout', 'App\Http\Controllers\LoginController@adminlogout');

// Product
Route::get('showingTable', 'App\Http\Controllers\ProductController@showTable')->name('showtable');

Route::get('create_product', 'App\Http\Controllers\ProductController@createproduct')->name('create_product');

Route::post('storeproducts', 'App\Http\Controllers\ProductController@storeProducts')->name('storeproduct');

Route::post('deleteproduct', 'App\Http\Controllers\ProductController@deleteProduct');

Route::get('updateproduct/{id}', 'App\Http\Controllers\ProductController@updateProduct')->name('update_product');

Route::post('updatestoreproduct/{id}', 'App\Http\Controllers\ProductController@updateStoreProduct')->name('updatestore_product');



// Category
Route::get('create_category', 'App\Http\Controllers\ProductController@createcategory')->name('create_category');

Route::post('store_category', 'App\Http\Controllers\ProductController@storecategory')->name('store_category');

Route::get('showcate', 'App\Http\Controllers\ProductController@showCate')->name('showcate');

Route::get('update_category/{id}', 'App\Http\Controllers\ProductController@updateCategory')->name('update_category');

Route::post('storeupdate_category/{id}', 'App\Http\Controllers\ProductController@storeupdateCategory')->name('storeupdate_category');

Route::post('deletecate', 'App\Http\Controllers\ProductController@deleteCate');

// Post
Route::get('create_post', 'App\Http\Controllers\PostController@createpost')->name('create_post');

Route::post('store_post', 'App\Http\Controllers\PostController@storepost')->name('store_post');

Route::get('updatepost/{id}', 'App\Http\Controllers\PostController@updatePost')->name('update_post');

Route::post('storeupdate_post/{id}', 'App\Http\Controllers\PostController@storeupdatePost')->name('storeupdate_post');

Route::post('delete_post', 'App\Http\Controllers\PostController@deletePost');

Route::post('storecomment', 'App\Http\Controllers\PostController@storecomment')->name('store_comment');
//Reply
Route::post('storereply', 'App\Http\Controllers\PostController@storereply')->name('store_reply');
// });





//Login

Route::get('log_in', 'App\Http\Controllers\LoginController@adminlogin');

Route::get('showpost', 'App\Http\Controllers\PostController@showpost')->name('showpost');

Route::get('postui', 'App\Http\Controllers\PostController@showpostui');

// Route::get('/email',function(){
//     Mail::to('email@email.com')->send(new ContactMail());
//     return new ContactMail();
// });
Route::post('/send-mail', 'App\Http\Controllers\HomeController@sendMail')->name('send.mail');
// Post Comment


// Route::get('/tet',function(){
//    $user= User::create([
//         "name"=>'admin',
//         "email"=>'sevendiamond@gmail.com',
//         "password"=>Hash::make('sevendiamond123@')
//     ]);
//     echo $user;
// });