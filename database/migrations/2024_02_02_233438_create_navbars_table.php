<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->longText('main')->nullable();
            $table->longText('counties')->nullable();
            $table->longText('tours')->nullable();
            $table->longText('aviakassa')->nullable();
            $table->longText('services')->nullable();
            $table->longText('about')->nullable();
            $table->longText('contact')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
