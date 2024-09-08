<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

// Route API
Route::post('/devices/{deviceId}/tracking',[Api\ApiController::class, 'tracking_gps']);
Route::post('/devices/{deviceId}/pv-monitoring',[Api\ApiController::class, 'monitoring_pv']);
Route::post('/devices/{deviceId}/cart-monitoring',[Api\ApiController::class, 'monitoring_cart']);
