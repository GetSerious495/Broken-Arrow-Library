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
        Schema::create('guided_launchers_AA', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weapon_id')->constrained('base_weapons')->onDelete('cascade');
            $table->string('weapons_guidance_type');
            $table->integer('launchers_supply_time');
            $table->integer('launchers_lowalt_range_min');
            $table->integer('launchers_lowalt_range_max');
            $table->integer('launchers_highalt_range_min');
            $table->integer('launchers_highalt_range_max');
            $table->boolean('AA_target_aircraft');
            $table->boolean('AA_target_missile');
            $table->integer('launchers_max_speed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guided_launchers_AA');
    }
};
