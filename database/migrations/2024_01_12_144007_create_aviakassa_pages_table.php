<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('aviakassa_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('navbar_text')->nullable();
            $table->longText('aviakassa_h6')->nullable();
            $table->longText('aviakassa_h1')->nullable();
            $table->longText('contact_number')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aviakassa_pages');
    }
};
