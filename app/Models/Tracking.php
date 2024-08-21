<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tracking extends Model
{
    use HasFactory;

    protected $table = 'tracking';
    protected $fillable = ['device_id','latitude','longitude'];

    public function device() {
        return $this->belongsTo('App\Models\Devices');
    }
}
