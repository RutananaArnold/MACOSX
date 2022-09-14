<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ForgotPasswordController;

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
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});


Auth::routes();
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//MiddleWare -> Auth
Route::middleware(['auth']) -> group(function() {
    //ALL ROUTES TO PAGES THAT REQUIRE "LOGIN"
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::resource('users', 'ProfilesController');
    Route::resource('orders', 'OrdersController');
    Route::get('profile', 'ChangePasswordController@index');
    Route::post('profile', 'ChangePasswordController@store')->name('change.password');

    //SHOPPING CART
    //Route::get('/', 'CartController@shop')->name('shop');
    Route::get('/cart', 'CartController@cart')->name('cart.index');
    Route::post('/add', 'CartController@add')->name('cart.store');
    Route::post('/update', 'CartController@update')->name('cart.update');
    Route::post('/remove', 'CartController@remove')->name('cart.remove');
    Route::post('/clear', 'CartController@clear')->name('cart.clear');
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');


    //ONLY ADMIN VIEWS
    Route::get('/add-product', function () {
        return view('add-product');
    });
    Route::resource('/a-inbox', 'MessagesController');
    Route::get('/a-inbox', 'MessagesController@index');

    Route::post('/categories/addproduct', 'CategoriesController@addproduct')->name('categories.addproduct');
    Route::post('/categories/removeproduct', 'CategoriesController@removeproduct')->name('categories.removeproduct');
    Route::post('/tags/addproduct', 'TagsController@addproduct')->name('tags.addproduct');
    Route::post('/tags/removeproduct', 'TagsController@removeproduct')->name('tags.removeproduct');

});


//ROUTES THAT DON'T REQUIRE LOGIN
Route::get('/', 'TagsController@index');
Route::resource('/products', 'ProductsController');
Route::get('/layouts/navbar', 'ProductsController@search')->name('search');

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::resource('tags', 'TagsController');
Route::resource('categories', 'CategoriesController');
Route::post('/layouts/navbar', 'CallbacksController@store')->name('callbacks.store');
Route::post('/layouts/contact-form', 'MessagesController@store')->name('messages.store');


//Exception Handlers
Route::get('/404', function () {
    return view('404');
});
