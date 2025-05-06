<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');
    Route::get('/entity', [DashboardController::class, 'entityPage'])->name('entity');
    Route::get('/department', [DashboardController::class, 'departmentPage'])->name('department');

    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    // Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

});