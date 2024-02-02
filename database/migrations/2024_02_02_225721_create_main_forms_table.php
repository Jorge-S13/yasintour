<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_forms', function (Blueprint $table) {
            $table->id();
            $table->longText('form_h6')->nullable();
            $table->longText('form_text_h1')->nullable();
            $table->longText('form_p')->nullable();
            $table->longText('form_h1')->nullable();
            $table->longText('name')->nullable();
            $table->longText('phone')->nullable();
            $table->longText('date')->nullable();
            $table->longText('country')->nullable();
            $table->longText('description')->nullable();
            $table->longText('button')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_forms');
    }
};
