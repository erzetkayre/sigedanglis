<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


// Role Admin
Route::name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard', [Admin\AdminDasboardController::class])->name('dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
