<?php

use App\Http\Livewire\Cart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Products;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/cart', Cart::class)->name('cart.index');
Route::get('/products', Products::class)->name('product.index');


Route::get('/product/{slug}/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/brand/{slug}', function ($slug) {
    return $slug;
})->name('brand.show');
