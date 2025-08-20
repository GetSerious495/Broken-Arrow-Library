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
        Schema::create('sniper_rifle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weapon_id')->constrained('base_weapons')->onDelete('cascade');
            $table->float('weapons_dispersion_x');
            $table->float('weapons_dispersion_y');
            $table->integer('weapons_mag_size');
            $table->float('weapons_ignore_cover');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sniper_rifle');
    }
};
