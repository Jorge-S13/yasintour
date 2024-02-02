<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->longText('main');
            $table->longText('counties');
            $table->longText('tours');
            $table->longText('aviakassa');
            $table->longText('services');
            $table->longText('about');
            $table->longText('contact');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
