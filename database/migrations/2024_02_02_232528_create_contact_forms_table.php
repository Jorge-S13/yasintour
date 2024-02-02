<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('email');
            $table->longText('phone');
            $table->longText('description');
            $table->longText('button');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};
