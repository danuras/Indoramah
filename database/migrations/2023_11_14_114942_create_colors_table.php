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
        Schema::create('colors', function (Blueprint $table) {
            $table->string('header_text_color')->default('#FFFFFF');
            $table->string('common_text_color')->default('#A6A6A6');
            $table->string('background_color_1')->default('#FFFFFF');
            $table->string('background_color_2')->default('#151517');
            $table->string('card_color')->default('#151517');
            $table->string('highlight_color')->default('#D3B48D');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
