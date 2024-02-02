<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('navbar_text')->nullable();
            $table->longText('process_h6')->nullable();
            $table->longText('process_h1')->nullable();
            $table->longText('process_item1_h5')->nullable();
            $table->longText('process_item1_p')->nullable();
            $table->longText('process_item2_h5')->nullable();
            $table->longText('process_item2_p')->nullable();
            $table->longText('process_item3_h5')->nullable();
            $table->longText('process_item3_p')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_pages');
    }
};
