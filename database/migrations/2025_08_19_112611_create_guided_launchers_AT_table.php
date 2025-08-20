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
        Schema::create('guided_launchers_AT', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weapon_id')->constrained('base_weapons')->onDelete('cascade');
            $table->string('weapons_guidance_type');
            $table->integer('launchers_supply_time');
            $table->integer('launchers_range_min');
            $table->boolean('launchers_intercept');
            $table->integer('launchers_max_speed');
            $table->boolean('stop_to_fire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guided_launchers_AT');
    }
};
