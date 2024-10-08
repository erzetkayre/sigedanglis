<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringCart extends Model
{
    use HasFactory;

    protected $table = 'monitoring_cart';

    protected $fillable = ['device_id','speed','battery'];

    public function device() {
        return $this->belongsTo('App\Models\Devices');
    }
}
