<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();
            $table->string('icon1')->nullable();
            $table->string('heading1')->nullable();
            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->string('text3')->nullable();
            $table->string('image1')->nullable();
            $table->string('question1')->nullable();
            $table->string('answer1')->nullable();
            $table->string('image2')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutus');
    }
};
