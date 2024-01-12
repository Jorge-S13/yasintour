<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('aviakassa_pages', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_text');
            $table->string('aviakassa_h6');
            $table->string('aviakassa_h1');
            $table->string('contact_number');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aviakassa_pages');
    }
};
