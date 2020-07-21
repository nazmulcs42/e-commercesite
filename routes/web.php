<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/t', function () {
    return view('template');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/index', function () {
    return view('admin.index');
});


Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/blogPost', 'BlogController@show')->name('blog.blogPost');
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/product/singleItem', 'ProductController@show')->name('product.singleItem');
Route::get('/accessories', 'AccessoriesController@index')->name('accessories');
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/customer/register', 'CustomerController@register')->name('customer.register');
Route::get('/customer/login', 'CustomerController@login')->name('customer.login');
Route::get('/customer/wishlist', 'CustomerController@wishlist')->name('customer.wishlist');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/contact', 'HomeController@contact')->name('contact');

Route::post('/thumnail/show', 'HomeController@show')->name('thumnail.show');


Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::get('/admin/index', 'AdminController@index')->name('admin.index');
