<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MonitoringCart;
use App\Models\MonitoringPV;
use Carbon\Carbon;

class MonitoringController extends Controller
{
    public function monitoringpv() {
        $data = MonitoringPV::orderBy('created_at', 'desc')
            ->select('created_at', 'volt', 'current','power')
            ->paginate(10);

        return view(view: 'pages.owner.dashboard_pv', data: compact('data'));
    }
    public function monitoringcart() {
        $data = MonitoringCart::orderBy('created_at', 'desc')
            ->select('created_at', 'speed', 'battery')
            ->paginate(10);

        return view('pages.owner.dashboard_cart', compact(var_name: 'data')); // Change 'your_view_name' to your actual view
    }
}
