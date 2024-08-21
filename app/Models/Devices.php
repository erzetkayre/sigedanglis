<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    use HasFactory;

    protected $table = 'devices';

    public function user() {
        return $this->hasOne('App\Models\User');
    }

    public function transaction() {
        return $this->hasMany('App\Models\Transaction');
    }

    public function tracking() {
        return $this->hasMany('App\Models\Tracking');
    }

    public function monitoring_pv() {
        return $this->hasMany('App\Models\MonitoringPV');
    }

    public function monitoring_cart() {
        return $this->hasMany('App\Models\MonitoringCart');
    }

    public function item() {
        return $this->hasMany('App\Models\Item');
    }
}
