<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_forms', function (Blueprint $table) {
            $table->id();
            $table->longText('form_h6');
            $table->longText('form_text_h1');
            $table->longText('form_p');
            $table->longText('form_h1');
            $table->longText('name');
            $table->longText('phone');
            $table->longText('date');
            $table->longText('country');
            $table->longText('description');
            $table->longText('button');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_forms');
    }
};
