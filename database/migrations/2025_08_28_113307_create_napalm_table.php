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
        Schema::create('napalm_launcher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weapon_id')->constrained('base_weapons')->onDelete('cascade');
            $table->float('weapons_dispersion_x');
            $table->float('weapons_dispersion_y');
            $table->integer('launchers_supply_time');
            $table->boolean('launchers_intercept');
            $table->integer('weapons_blast_radius');
            $table->float('weapons_ignore_cover');
            $table->boolean('weapons_top_damage');
            $table->boolean('weapons_napalm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('napalm_launcher');
    }
};
