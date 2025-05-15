<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\BranchTypeController;
use App\Http\Controllers\BusinessTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\IndustryTypeController;
use App\Models\Branch;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');
    
    Route::get('/entity', [DashboardController::class, 'entityPage'])->name('entity');
    Route::post('/entity', [EntityController::class, 'store'])->name('entity.store');
    Route::put('/entity', [EntityController::class, 'update'])->name('entity.update');

    Route::post('/business-types', [BusinessTypeController::class, 'store'])->name('business-types.store');
    Route::put('/business-types', [BusinessTypeController::class, 'update'])->name('business-types.update');

    Route::post('/industry-types', [IndustryTypeController::class, 'store'])->name('industry-types.store');
    Route::put('/industry-types', [IndustryTypeController::class, 'update'])->name('industry-types.update');

    Route::get('/department', [DashboardController::class, 'departmentPage'])->name('department');
    Route::post('/department', [DepartmentController::class, 'store'])->name('departments.store');
    Route::put('/department', [DepartmentController::class, 'update'])->name('departments.update');

    Route::get('/branch', [DashboardController::class, 'branchPage'])->name('branch');
    Route::post('/branch', [BranchController::class, 'store'])->name('branch.store');
    Route::put('/branch', [BranchController::class, 'update'])->name('branch.update');

    Route::post('/branch-types', [BranchTypeController::class, 'store'])->name('branch-types.store');
    Route::put('/branch-types', [BranchTypeController::class, 'update'])->name('branch-types.update');

    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    // Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

});