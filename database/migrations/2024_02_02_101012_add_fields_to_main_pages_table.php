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
        Schema::table('main_pages', function (Blueprint $table) {
            $table->longText('feedback_h6')->nullable();
            $table->longText('feedback_h1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('main_pages', function (Blueprint $table) {
            //
        });
    }
};
