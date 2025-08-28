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
        Schema::table('sniper_rifle', function (Blueprint $table) {
            $table->boolean('stop_to_fire');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            //
    }
};
