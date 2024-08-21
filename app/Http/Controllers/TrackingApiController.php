<?php

namespace App\Http\Controllers;

use App\Models\Devices;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingApiController extends Controller
{
    public function store(Request $request, $deviceId) {
        $validatedData = $request->validate([
            'lat' => 'required',
            'long' => 'required',
        ]);

        // Token JWT API
        $device = Devices::find($deviceId);
        $jwt = "bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoiU2lnZWRhbmdsaXMuaWQiLCJpYXQiOjEyNDExMDUxOTg1MTk4NjcxMDB9.Mz1iNGhtRboZmJt6lCzW7oDzGKysi3dl4mqTHnOnelQ";
        $token = $request->header('Authorization');

        // Pengecekan Device Terdaftar
        if (!$device) {
            return response()->json([
                "message" => 'Device not found',
                "status" => 404,
            ]);
        } else {
            // Pengecekan Token JWT
            if ($token != $jwt) {
                return response()->json([
                    "message" => 'Invalid Token',
                    "status" => 401,]
                );
            } else {
                $tracking = Tracking::create([
                    'device_id' => $device->id,
                    'latitude' => $request->lat,
                    'longitude' => $request->long,
                ]);

                return response()->json([
                    'message' => 'Data Berhasil Diinputkan',
                    'data' => $tracking,
                ]);
            }
        }
    }
}
