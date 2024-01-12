<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tour_pages', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_text');
            $table->string('tour_h6');
            $table->string('tour_h1');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tour_pages');
    }
};
