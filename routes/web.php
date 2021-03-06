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
Route::get('/', 'ProductController@main')->name('main.page');
Route::get('/catalog', 'CatalogController@catalog')->name('catalog.page');

Route::get('/feedback', 'MailController@feedback')->name('feedback');
Route::post('/sendmail', 'MailController@sendmail')->name('sendmail');

Route::post('/filter', 'FilterController@search')->name('filter');

Route::get('/show-cart', 'ProductController@showCart')->name('show.cart');
Route::get('/forget', 'ProductController@destroyProduct')->name('destroy');
Route::get('/reduce-by-one/{id}', 'ProductController@reduceByOne')->name('reduce.by.one');
Route::get('/delete/{id}', 'ProductController@deleteProduct')->name('delete.product');
Route::get('/checkout', 'CartController@checkout')->name('checkout');
Route::post('/checkout', 'CartController@checkoutForm')->name('checkout.form');
Route::get('/get-add-to-cart/{id}', 'ProductController@getAddToCart')->name('add.to.cart');
Route::get('/success', 'CartController@success')->name('success.redirect');


Auth::routes();
Route::group(['middleware'=>'auth', 'prefix'=>'home'], function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/products', 'ProductController');
    // разрешаем методы для публичной части
    //Route::resource('/home/posts', 'PostController')->except(['index', 'show']);
});











