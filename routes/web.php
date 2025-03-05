<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// frontend 

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/escort-details', [HomeController::class, 'escort_details'])->name('escort-details');
Route::get('/terms-and-conditions', [HomeController::class, 'tmc'])->name('term-condition');
Route::get('/privacy-policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/help-center', [HomeController::class, 'help_center'])->name('help_center');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/how-to-report-a-issue', [HomeController::class, 'issue'])->name('issue');
Route::get('/promo', [HomeController::class, 'promo'])->name('promo');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/user/login', [HomeController::class, 'login'])->name('user-login');
Route::get('/user/register', [HomeController::class, 'register'])->name('user-register');
Route::get('/{action}', [HomeController::class, 'services'])->name('services');
Route::get('/{action}/{places}', [HomeController::class, 'services'])->name('services');




// backend 
// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
