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
        Schema::create('web_attributes', function (Blueprint $table) {
            $table->string('title');
            $table->string('icon')->nullable();
            $table->string('short_description');
            $table->string('long_title');
            $table->string('main_heading');
            $table->string('sub_heading');
            $table->string('background_image');
            $table->string('background_testimonies')->nullable();
            $table->string('language')->default('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_attributes');
    }
};
