<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_text');
            $table->string('process_h6');
            $table->string('process_h1');
            $table->string('process_item1_h5');
            $table->string('process_item1_p');
            $table->string('process_item2_h5');
            $table->string('process_item2_p');
            $table->string('process_item3_h5');
            $table->string('process_item3_p');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_pages');
    }
};
