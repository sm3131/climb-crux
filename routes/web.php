<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

// Main site Routes
Route::get('/', function () {
    return view('pages.home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About']);
});

Route::get('/support', function () {
    return view('pages.support', ['title' => 'Support']);
});

Route::get('/resources', function () {
    return view('pages.resources', ['title' => 'Resources']);
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy', ['title' => 'Privacy Policy']);
});

Route::get('/terms-conditions', function () {
    return view('pages.terms-conditions', ['title' => 'Terms & Conditions']);
});

Route::get('/disclaimer', function () {
    return view('pages.disclaimer', ['title' => 'Terms & Conditions']);
});

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'send'])->middleware(ProtectAgainstSpam::class)->name("contact.send");

// Support Topics
Route::get('/exercise-programs', function () {
    return view('plans.exercise-programs', ['title' => 'Exercise Programs']);
});

Route::get('/nutrition-plans', function () {
    return view('plans.nutrition-plans', ['title' => 'Nutrition Plans']);
});

Route::get('/mental-fortitude', function () {
    return view('plans.mental-fortitude', ['title' => 'Mental Fortitude']);
});

Route::get('/community-page', function () {
    return view('plans.community-page', ['title' => 'Community Page']);
});


// Blog Routes
Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/blog-create', [BlogController::class, 'create'])->middleware('auth')->middleware('user.type:admin');

Route::post('/blog-store', [BlogController::class, 'store'])->middleware('user.type:admin')->name('blog.store');

Route::get('/blog-admin', [BlogController::class, 'admin'])->middleware('auth')->middleware('user.type:admin')->name('blog.admin');

Route::get('/blog-edit/{id}', [BlogController::class, 'edit'])->middleware('auth')->middleware('user.type:admin')->name('blog.edit');

Route::put('/blog-update/{id}', [BlogController::class, 'update'])->middleware('auth')->middleware('user.type:admin')->name('blog.update');

Route::delete('/blog-delete/{id}', [BlogController::class, 'destroy'])->middleware('auth')->middleware('user.type:admin')->name('blog.delete');

// Login & Auth Routes
Route::get('login', [LoginController::class, 'login'])->name('login');

Route::post('login', [LoginController::class, 'authenticate'])->middleware('user.type:admin');

Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('logout-success', [LoginController::class, 'logoutSuccess'])->name('logout-success');

Route::get('register', [LoginController::class, 'showRegister'])->name('register');

Route::post('register', [LoginController::class, 'register']);