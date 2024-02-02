<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('navbar_text')->nullable();
            $table->longText('contact_h6')->nullable();
            $table->longText('contact_h1')->nullable();
            $table->longText('contact_h5_office')->nullable();
            $table->longText('contact_h5_phone')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_pages');
    }
};
