<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('monitoring_pv', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('device_id');
            $table->float('volt');
            $table->float('current');
            $table->float('power');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring_pv');
    }
};
