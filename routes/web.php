<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EntityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');
    Route::get('/entity', [DashboardController::class, 'entityPage'])->name('entity');
    Route::post('/entity', [EntityController::class, 'store'])->name('entities.store');
    Route::put('/entity', [EntityController::class, 'update'])->name('entities.update');
    Route::get('/department', [DashboardController::class, 'departmentPage'])->name('department');
    Route::post('/department', [DepartmentController::class, 'store'])->name('departments.store');
    Route::put('/department', [DepartmentController::class, 'update'])->name('departments.update');

    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    // Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

});