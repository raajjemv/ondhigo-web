<?php

use App\Http\Livewire\Cart;
use App\Http\Livewire\About;
use App\Http\Livewire\Event;
use App\Http\Livewire\Events;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Products;
use App\Http\Livewire\ShowGallery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FbController;
use App\Http\Livewire\Luckydraw\Index;
use App\Http\Controllers\HomeController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LuckyDrawController;
use Laravel\Socialite\Two\InvalidStateException;
use App\Http\Livewire\Luckydraw\Form as LuckyDrawForm;

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

Route::get('auth/facebook', [FbController::class, 'redirectToFacebook'])->name('fb.login');
Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);
Route::get('fb', function () {
    if (!\Session::has('fb_token')) {
        return Socialite::driver('facebook')->redirect();
    }
});
// Route::get('/fb', [FbController::class, 'user']);
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/luckydraw', [LuckyDrawController::class, 'index']);
Route::get('/naseebveriya', LuckyDrawForm::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    return view('dashboard');
})->name('dashboard');

Route::view('/slider', 'slider');

Route::get('/cart', Cart::class)->name('cart.index');
Route::get('/products', Products::class)->name('product.index');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/about', About::class)->name('about');
Route::get('/events', Events::class)->name('events');
Route::get('/event/{slug}/{id}', Event::class)->name('event.show');
Route::get('/galleries', Gallery::class)->name('galleries');
Route::get('/gallery/{id}', [HomeController::class, 'galleryShow'])->name('gallery.show');
Route::get('/outlets', [HomeController::class, 'outlets'])->name('outlets');
Route::resource('recipe', RecipeController::class);

Route::get('/product/{slug}/{id}', [ProductController::class, 'show'])->name('product.show');
