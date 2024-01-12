<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services_pages', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_text');
            $table->string('services_h6');
            $table->string('services_h1');
            $table->string('item1_h5');
            $table->string('item1_p');
            $table->string('item2_h5');
            $table->string('item2_p');
            $table->string('item3_h5');
            $table->string('item3_p');
            $table->string('item4_h5');
            $table->string('item4_p');
            $table->string('item5_h5');
            $table->string('item5_p');
            $table->string('item6_h5');
            $table->string('item6_p');
            $table->string('item7_h5');
            $table->string('item7_p');
            $table->string('item8_h5');
            $table->string('item8_p');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services_pages');
    }
};
