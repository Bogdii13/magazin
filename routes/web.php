<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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

Route::get('/', [ProductController::class, 'index']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::resource('products', 'ProductController');
});

//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/products', [App\Http\Controllers\ProductController::class, 'indexes'])->name('products.index');
Route::group(['prefix' => 'products'], function () {
    Route::get('/products', [ProductController::class, 'products.index']);
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/create', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}/show', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::patch('/{product}/updates', [ProductController::class, 'updates'])->name('products.updates');
    Route::delete('/{product}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::resource('product', 'ProductController');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * User Routes
     */
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('/create', 'UsersController@create')->name('users.create');
        Route::post('/create', 'UsersController@store')->name('users.store');
        Route::get('/{user}/show', 'UsersController@show')->name('users.show');
        Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
        Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
        Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
    });
});



























//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
//Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', 'ProductController@index');
//    Route::resource('products', 'ProductController');
//});




//Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
//Route::group(['prefix' => 'users'], function() {
//    Route::get('/users', [UsersController::class, 'users.index']);
//    Route::get('/create', [UsersController::class, 'create'])->name('users.create');
//    Route::post('/create', [UsersController::class, 'store'])->name('users.store');
//    Route::get('/{user}/show', [UsersController::class, 'show'])->name('users.show');
//    Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
//    Route::patch('/{user}/update', [UsersController::class, 'update'])->name('users.update');
//    Route::delete('/{user}/delete', [UsersController::class, 'destroy'])->name('users.destroy');
//    Route::resource('users', 'UsersController');
//});