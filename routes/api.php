<?php

use App\Http\Controllers\TrackingApiController;
use Illuminate\Support\Facades\Route;

Route::post('/devices/{deviceId}/tracking',[TrackingApiController::class, 'store']);
