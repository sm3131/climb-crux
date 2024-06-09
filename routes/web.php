<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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
Route::post('/contact', [ContactController::class, 'send'])->name("contact.send");

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
