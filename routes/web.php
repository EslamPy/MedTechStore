<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardProduct;
use App\Http\Controllers\Admin\EditProductController;
use App\Http\Controllers\Admin\AddProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/Products', [ProductsController::class, 'index'])->name('Products');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/check', [CheckoutController::class, 'index'])->name('checkout');



Route::get('/latest', [LatestNewsController::class, 'index'])->name('latest');

// <!-- Cart Route -->
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');



// <!-- Admin Dashboard -->
Route::get('/dash', [DashboardController::class, 'index'])->name('dash');

// <!-- Product Dashboard -->
Route::get('/product', [DashboardProduct::class, 'index'])->name('product');

// <!-- Edit a Product in the Website -->
Route::get('/edit', [EditProductController::class, 'index'])->name('edit');

// <!-- Add a Product Page -->
Route::get('/add', [AddProductController::class, 'index'])->name('add');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
