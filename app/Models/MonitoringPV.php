<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringPV extends Model
{
    use HasFactory;

    protected $table = 'monitoring_pv';

    protected $fillable = ['device_id','volt','current','power'];

    public function device() {
        return $this->belongsTo('App\Models\Devices');
    }
}
