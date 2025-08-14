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
        Schema::create('launchers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weapon_id')->constrained('base_weapons')->onDelete('cascade');
            $table->integer('launchers_supply_time');
            $table->integer('launchers_intercept');
            $table->integer('launchers_lowalt_range');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('launchers');
    }
};
