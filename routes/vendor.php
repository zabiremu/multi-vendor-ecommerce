<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorDashboardController;

// vendor dashboard routes
Route::get('dashboard', [VendorDashboardController::class, 'dashboard'])->name('dashboard');
