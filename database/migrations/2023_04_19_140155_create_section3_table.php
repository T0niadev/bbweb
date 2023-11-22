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
        Schema::create('section3', function (Blueprint $table) {
            $table->id();
            $table->string('details')->nullable();
            $table->string('heading1')->nullable();
            $table->string('text1')->nullable();
            $table->string('image1')->nullable();
            $table->string('heading2')->nullable();
            $table->string('text2')->nullable();
            $table->string('image2')->nullable();
            $table->string('heading3')->nullable();
            $table->string('text3')->nullable();
            $table->string('image3')->nullable();
            $table->string('heading4')->nullable();
            $table->string('text4')->nullable();
            $table->string('image4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section3');
    }
};
