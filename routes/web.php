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


Route::prefix('main')->namespace('FrontEnd')->group(function(){

    Route::get('/','HomeController@index')->name('main');

    Route::get('/products/{id}','ProductController@show')->name('product.show');

    Route::get('/blog/posts','BlogController@index')->name('blog.index');
    Route::get('/blog/posts/{id}','BlogController@show')->name('blog.show');

    Route::get('/cart/{user}','CartController@index')->name('cart.index');
    Route::get('/cart/item/{id}','CartController@destroy')->name('cart-item.delete');
    Route::post('/cart/item/{id}','CartController@update')->name('cart-item.update');
    Route::post('/cart','CartController@create')->name('cart.create');

    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/shop','ShopController@index')->name('shop.index');
    Route::get('/shop/categories/{id}','ShopController@shopFillter')->name('shop.categories');
    Route::get('/shop/brands/{id}','ShopController@shopFillter')->name('shop.brands');


    Route::get('/wishlist',function(){
        return view('frontend.pages.wishlist.wishlist');})->name('wishlist.wishlist');

    Route::get('/aboutus',function(){
        return view('frontend.pages.aboutus');})->name('about_us');

    Route::get('/trackorder',function(){
        return view('frontend.pages.trackorder');})->name('track_order');


    Route::get('/checkout',function(){
        return view('frontend.pages.checkout');})->name('checkout');


    Route::get('/category',function(){
        return view('frontend.category.category');})->name('category');

    Route::get('/phone',function(){
        return view('frontend.category.phone');})->name('phone');

    Route::get('/laptop',function(){
        return view('frontend.category.laptop');})->name('laptop');

    Route::get('/tablet',function(){
        return view('frontend.category.tablet');})->name('tablet');

    Route::get('/camera',function(){
        return view('frontend.category.camera');})->name('camera');

    Route::get('/tv',function(){
        return view('frontend.category.tv');})->name('tv');

    Route::get('/videogame',function(){
        return view('frontend.category.videogame');})->name('game');

    Route::get('/electronic',function(){
        return view('frontend.category.category');})->name('ele');

    Route::get('/headphone',function(){
        return view('frontend.category.headphone');})->name('headphone');

    Route::get('/swatch',function(){
        return view('frontend.category.smartwatch');})->name('swatch');



});


Route::middleware('admin')->prefix('admin')->namespace('BackEnd')->group(function(){

    Route::resources([
        'products' => 'ProductController',
        'categories' => 'CategoryController',
        'brands' =>'BrandController',
        ]);
   route::get('messages','MessageController@index')->name('messages.index');
   route::get('messages/replay/{message}','MessageController@replay')->name('messages.replay');
   route::post('messages/replay','MessageController@send')->name('messages.send');
   route::delete('messages/{message}','MessageController@destroy')->name('messages.destroy');

});
Auth::routes();
