<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', function () { return view('dashboard.page'); })->name('dashboard');

    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    // Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

});