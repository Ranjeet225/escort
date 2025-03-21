<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
// frontend 

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ads/{slug}', [HomeController::class, 'escort_details'])->name('ads');
Route::get('/terms-and-conditions', [HomeController::class, 'tmc'])->name('term-condition');
Route::get('/privacy-policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/help-center', [HomeController::class, 'help_center'])->name('help_center');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/how-to-report-a-issue', [HomeController::class, 'issue'])->name('issue');
Route::get('/promo', [HomeController::class, 'promo'])->name('promo');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::middleware('guest')->group(function () {
    Route::get('signup', [RegisteredUserController::class, 'create'])->name('signup');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register');
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});
Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::get('user-logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('post-ads', [HomeController::class, 'post_ads'])->name('dashboard');
    Route::post('post-ads', [HomeController::class, 'save_post_ads'])->name('post.ads.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/my-ads', [HomeController::class, 'my_ads'])->name('my-ads');
    Route::get('/edit-post-ad/{id}', [HomeController::class, 'edit_post_ads'])->name('edit.post.ads');
    Route::post('/update-post-ad/{id}', [HomeController::class, 'update_post_ads'])->name('post.ads.update');
    Route::delete('delete-post-ad', [HomeController::class, 'delete_post_ads'])->name('delete.post.ads');
    Route::get('/account', [HomeController::class, 'account'])->name('account');
    Route::get('/settings', [HomeController::class, 'settings'])->name('settings');
    Route::get('admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('manage-users', [AdminController::class, 'manage_users'])->name('manage_users');
    Route::post('/admin-update-post-ad/{id}', [AdminController::class, 'admin_update_post_ads'])->name('admin.post.ads.update');
});
Route::get('states', [HomeController::class, 'states'])->name('get.states');
Route::get('city', [HomeController::class, 'city'])->name('get.cities');
Route::get('search',[HomeController::class,'search'])->name('search');
Route::get('all-cities',[HomeController::class,'all_cities'])->name('all-cities');
Route::get('/just-check', [HomeController::class, 'just_check'])->name('just-check');
Route::get('/{action}', [HomeController::class, 'services'])->where('action', '^(?!public$).*')->name('service');
Route::get('/{action}/{places}', [HomeController::class, 'services'])->where('action', '^(?!public$).*')->where('places', '^(?!public$).*')->name('services');



// backend 
// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



