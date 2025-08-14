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
        Schema::create('base_weapons', function (Blueprint $table) {
            $table->id();
            $table->string('weapons_name');
            $table->string('weapons_ammo_name');
            $table->string('weapons_trajectory');
            $table->integer('weapons_aim_time');
            $table->integer('weapons_reload');
            $table->string('weapons_damage_type');
            $table->float('weapons_damage');
            $table->integer('weapons_range');
            $table->integer('weapons_penetrate_min');
            $table->integer('weapons_penetrate_max');
            $table->float('weapons_supply');
            $table->boolean('weapons_target_inf');
            $table->boolean('weapons_target_vehicle');
            $table->boolean('weapons_target_heli');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('base_weapons');
    }
};
