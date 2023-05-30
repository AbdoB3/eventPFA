<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VillesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['verify'=>true]);
Route::get('/guests/lc/{idlc}/destroy', [OrderController::class, 'ligneDestroy']);
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('welcome');
Route::get('/admin/calender', [HomeController::class, 'calender'])->name('calender');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/updateProfile', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::get('/chekdetaills', [OrderController::class, 'cart'])->name('cart')->middleware('auth');
Route::post('/store', [OrderController::class, 'store'])->name('store');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout')->middleware('auth','User');

Route::get('/user/orders_user/invoice/{id}', [OrderController::class, 'viewInvoice'])->name('viewInvoice');
Route::get('invoice/{id}/generate', [OrderController::class, 'generateInvoice'])->name('generateInvoice');




Route::get('/profile_user', [HomeController::class, 'profile_user'])->name('profile_user');
Route::post('/updateProfile_user', [HomeController::class, 'updateProfile_user'])->name('updateProfile_user');

Route::get('admin/dashboard', [HomeController::class, 'dashboard_admin'])->name('dashboard_admin')->middleware('auth','IsAdmin');
Route::get('user/dashboard', [HomeController::class, 'dashboard_user'])->name('dashboard_user')->middleware('auth','User');
Route::get('/detailles/{id}', [HomeController::class, 'detailles'])->name('detailles')->middleware('auth');
Route::get('/admin/guests', [HomeController::class, 'guests'])->name('guests');
Route::get('/About', [HomeController::class, 'About'])->name('About');

Route::resource('category', CategoryController::class)->middleware('auth','admin');
Route::resource('ville', VillesController::class)->middleware('auth','admin');
Route::resource('event', EventController::class)->middleware('auth','admin');
Route::resource('ticket', TicketController::class)->middleware('auth','admin');
// Route::get('/home', [HomeController::class, 'admin'])->name('hello');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('contact-us', [HomeController::class, 'showContactForm'])->name('contact');
Route::post('contact-us', [HomeController::class, 'showContactForm'])->name('contact');
Route::get('orders_user', [HomeController::class, 'orders_user'])->name('orders_user');

Route::get('orders', [HomeController::class, 'orders'])->name('orders');
// Route::post('contact-us', [HomeController::class, 'submitContactForm'])->name('contact');
Route::post('/admin/profile/update', [HomeController::class, 'updateProfile'])->name('update-profile');
Route::get('stripe', [StripController::class , 'stripe']);
Route::post('stripe', [StripController::class, 'stripePost'])->name('stripe.post');
Route::post('search', [HomeController::class, 'search']);
Route::get('/browse/{id} ', [HomeController::class, 'browse'])->name('browse');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/Gallery', [HomeController::class, 'Gallery'])->name('Gallery');

