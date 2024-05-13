<?php

use App\Http\Controllers\Backend\AdminDashboardController;
use Illuminate\Support\Facades\Route;

// admin dashboard routes
Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
