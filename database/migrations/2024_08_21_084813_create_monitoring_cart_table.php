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
        Schema::create('movitoring_cart', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('device_id');
            $table->float('speed');
            $table->float('battery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movitoring_cart');
    }
};
