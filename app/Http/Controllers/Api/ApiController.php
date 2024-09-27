<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Devices;
use App\Models\Tracking;
use App\Models\MonitoringPV;
use App\Models\MonitoringCart;
use Carbon\Carbon;

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
    public function tracking_history($deviceId)
    {
        $locationHistory = Tracking::where('device_id', $deviceId)
                                ->orderBy('created_at', 'asc')
                                ->get(['latitude', 'longitude', 'created_at']);

        return response()->json($locationHistory);
    }

    public function get_monitoring_pv($deviceId)
    {
    //     // Pengecekan Device Terdaftar
    //     $device = Devices::find($deviceId);
    //     if (!$device) {
    //         return response()->json([
    //             "message" => 'Device not found',
    //             "status" => 404,
    //         ]);
    //     }

    //     // Get the current date and the previous 24 hours of data
    //     $now = Carbon::now();
    //     $data = MonitoringPV::where('device_id', $device->id)
    //         ->whereBetween('created_at', [$now->subHours(24), $now])
    //         ->get();

    //     if ($data->isEmpty()) {
    //         return response()->json([
    //             "message" => 'No data available',
    //             "status" => 404,
    //         ]);
    //     }

    //     // Calculate averages per hour
    //     $averages = [];
    //     for ($i = 0; $i < 24; $i++) {
    //         $hourData = $data->filter(function ($item) use ($i) {
    //             return $item->created_at->hour == ($i);
    //         });

    //         if ($hourData->isNotEmpty()) {
    //             $averages[] = [
    //                 'hour' => $i,
    //                 'volt' => $hourData->avg('volt'),
    //                 'current' => $hourData->avg('current'),
    //                 'power' => $hourData->avg('power'),
    //             ];
    //         } else {
    //             $averages[] = [
    //                 'hour' => $i,
    //                 'volt' => 0,
    //                 'current' => 0,
    //                 'power' => 0,
    //             ];
    //         }
    //     }

    //     return response()->json([
    //         'message' => 'Average data retrieved successfully',
    //         'data' => $averages,
    //     ]);
    // }

    $data = MonitoringPV::where('device_id', $deviceId)->get();

    return response()->json($data);
    }
}
