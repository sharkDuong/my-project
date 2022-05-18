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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/index.html', function () {
    return view('home');
});
Route::get('/shop-grid.html', function () {
    return view('shop');
});
Route::get('/blog.html', function () {
    return view('blog');
});
Route::get('/contact.html', function () {
    return view('contact');
});
// 4 page
Route::get('/shop-details.html', function () {
    return view('s1');
});
Route::get('/shoping-cart.html', function () {
    return view('s2');
});
Route::get('/checkout.html', function () {
    return view('s3');
});
Route::get('/blog-details.html', function () {
    return view('s4');
});

