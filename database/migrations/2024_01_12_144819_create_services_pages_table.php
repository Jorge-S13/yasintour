<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('navbar_text')->nullable();
            $table->longText('services_h6')->nullable();
            $table->longText('services_h1')->nullable();
            $table->longText('item1_h5')->nullable();
            $table->longText('item1_p')->nullable();
            $table->longText('item2_h5')->nullable();
            $table->longText('item2_p')->nullable();
            $table->longText('item3_h5')->nullable();
            $table->longText('item3_p')->nullable();
            $table->longText('item4_h5')->nullable();
            $table->longText('item4_p')->nullable();
            $table->longText('item5_h5')->nullable();
            $table->longText('item5_p')->nullable();
            $table->longText('item6_h5')->nullable();
            $table->longText('item6_p')->nullable();
            $table->longText('item7_h5')->nullable();
            $table->longText('item7_p')->nullable();
            $table->longText('item8_h5')->nullable();
            $table->longText('item8_p')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services_pages');
    }
};
