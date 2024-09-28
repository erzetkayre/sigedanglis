<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Owner;
use App\Http\Controllers\Seller;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk Admin
    Route::name('admin.')->middleware('role:admin')->group(function() {
        Route::get('/admin/dashboard', Admin\AdminDasboardController::class)->name('dashboard');
    });

    // Route untuk Owner
    Route::name('owner.')->middleware('role:owner')->group(function() {
        // Owner Monitoring
        Route::get('/owner/dashboard', Owner\OwnerDashboardController::class)->name('dashboard');
        Route::get('owner/monitoring-pv', [Owner\MonitoringController::class, 'monitoringpv'])->name('pv');
        Route::get('owner/monitoring-gerobak', [Owner\MonitoringController::class, 'monitoringcart'])->name('cart');
        Route::resource('owner/users', Owner\UserManagementController::class);
        Route::resource('owner/report', Owner\ReportController::class);

        // Owner Transaksi

    });

    // Route untuk Seller
    Route::name('seller.')->middleware('role:seller')->group(function(){
        Route::get('/dashboard', Seller\SellerDashboardController::class)->name('dashboard');

    });

});


require __DIR__.'/auth.php';
