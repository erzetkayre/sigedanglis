<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringPV extends Model
{
    use HasFactory;

    public function device() {
        return $this->belongsTo('App\Models\Devices');
    }
}
