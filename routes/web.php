<?php

use Illuminate\Support\Facades\Route;
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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/products', [ProductsController::class, 'index'])->name('Products');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/latest', [LatestNewsController::class, 'index'])->name('latest');

Route::get('/dash', [DashboardController::class, 'index'])->name('dash');
Route::get('/product', [DashboardProduct::class, 'index'])->name('product');

Route::get('/edit', [EditProductController::class, 'index'])->name('edit');
Route::get('/add', [AddProductController::class, 'index'])->name('add');

// Authentication Routes
Auth::routes();

// Custom Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Password Reset Routes
Route::get('/password/reset', [ResetPasswordController::class, 'showResetForm'])->name('password.request');
Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');