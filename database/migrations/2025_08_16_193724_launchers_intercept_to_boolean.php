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
        Schema::table('launchers', function (Blueprint $table) {
            // Change column type to boolean
            $table->boolean('launchers_intercept')->change();
        });
    }

    public function down(): void
    {
        Schema::table('launchers', function (Blueprint $table) {
            // Revert column type back to integer
            $table->integer('launchers_intercept')->change();
        });
    }
};
