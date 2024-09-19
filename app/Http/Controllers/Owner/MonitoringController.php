<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function monitoringpv() {
        return view(view: 'pages.owner.dashboard_pv');
    }
    public function monitoringcart() {
        return view(view: 'pages.owner.dashboard_cart');

    }
}
