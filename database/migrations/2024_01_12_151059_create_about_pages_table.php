<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('navbar_text')->nullable();
            $table->longText('about_h6')->nullable();
            $table->longText('about_h1')->nullable();
            $table->longText('about_span')->nullable();
            $table->longText('about_main_p1')->nullable();
            $table->longText('about_main_p2')->nullable();
            $table->longText('about_p1')->nullable();
            $table->longText('about_p2')->nullable();
            $table->longText('about_p3')->nullable();
            $table->longText('about_p4')->nullable();
            $table->longText('about_p5')->nullable();
            $table->longText('about_p6')->nullable();
            $table->longText('button')->nullable();
            $table->longText('img')->nullable();
            $table->longText('team_h6')->nullable();
            $table->longText('team_h1')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
