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
    return view('admin.login');
});

Route::get('/admin/index', function () {
    return view('admin.dashboard.index');
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
Route::get('/admin/calendar', 'AdminController@calendar')->name('admin.calendar');
Route::get('/admin/chart', 'AdminController@chart')->name('admin.chart');
Route::get('/admin/file-manager', 'AdminController@file_manager')->name('admin.file-manager');
Route::get('/admin/form', 'AdminController@form')->name('admin.form');
Route::get('/admin/gallery', 'AdminController@gallery')->name('admin.gallery');
Route::get('/admin/icon', 'AdminController@icon')->name('admin.icon');
Route::get('/admin/messages', 'AdminController@messages')->name('admin.messages');
Route::get('/admin/submenu1', 'AdminController@submenu1')->name('admin.submenu1');
Route::get('/admin/submenu2', 'AdminController@submenu2')->name('admin.submenu2');
Route::get('/admin/submenu3', 'AdminController@submenu3')->name('admin.submenu3');
Route::get('/admin/table', 'AdminController@table')->name('admin.table');
Route::get('/admin/tasks', 'AdminController@tasks')->name('admin.tasks');
Route::get('/admin/typography', 'AdminController@typography')->name('admin.typography');
Route::get('/admin/ui', 'AdminController@ui')->name('admin.ui');
Route::get('/admin/widgets', 'AdminController@widgets')->name('admin.widgets');
