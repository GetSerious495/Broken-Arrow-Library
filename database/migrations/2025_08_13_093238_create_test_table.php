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
        Schema::create('test_table', function (Blueprint $table) {
            $table->id();
            $table->string('weapons_name');
            $table->float('weapons_damage');
            $table->integer('weapons_range');
            $table->integer('weapons_penetrate');
            $table->integer('weapons_reload');
            $table->float('weapons_supply');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_tables');
    }
};
