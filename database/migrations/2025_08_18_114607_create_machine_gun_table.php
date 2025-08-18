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
        Schema::create('machine_gun', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weapon_id')->constrained('base_weapons')->onDelete('cascade');
            $table->float('weapons_dispersion_x');
            $table->float('weapons_dispersion_y');
            $table->integer('weapons_mag_size');
            $table->boolean('stop_to_fire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machine_gun');
    }
};
