<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Devices;
use App\Models\Tracking;
use App\Models\MonitoringPV;
use App\Models\MonitoringCart;

class ApiController extends Controller
{
    public function tracking_gps (Request $request, $deviceId) {
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
    public function monitoring_pv (Request $request, $deviceId) {
        $validatedData = $request->validate([
            'volt' => 'required',
            'current' => 'required',
            'power' => 'required',
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
                $pv = MonitoringPV::create([
                    'device_id' => $device->id,
                    'volt' => $request->volt,
                    'current' => $request->current,
                    'power' => $request->power,
                ]);

                return response()->json([
                    'message' => 'Data Berhasil Diinputkan',
                    'data' => $pv,
                ]);
            }
        }
    }
    public function monitoring_cart (Request $request, $deviceId) {
        $validatedData = $request->validate([
            'speed' => 'required',
            'battery' => 'required',
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
                $cart = MonitoringCart::create([
                    'device_id' => $device->id,
                    'speed' => $request->speed,
                    'battery' => $request->battery,
                ]);

                return response()->json([
                    'message' => 'Data Berhasil Diinputkan',
                    'data' => $cart,
                ]);
            }
        }
    }
}
