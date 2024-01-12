<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_text');
            $table->string('about_h6');
            $table->string('about_h1');
            $table->string('about_span');
            $table->string('about_main_p1');
            $table->string('about_main_p2');
            $table->string('about_p1');
            $table->string('about_p2');
            $table->string('about_p3');
            $table->string('about_p4');
            $table->string('about_p5');
            $table->string('about_p6');
            $table->string('button');
            $table->string('img');
            $table->string('team_h6');
            $table->string('team_h1');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
