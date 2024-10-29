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
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('image_path')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('image_path');
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('zip');
        });
    }
};
