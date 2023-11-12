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
        Schema::create('content_types', function (Blueprint $table) {
            $table->id();
            $table->string('image_url')->nullable();
            $table->string('title')->nullable();
            $table->longText('teks')->nullable();
            $table->unsignedBigInteger('card_type_id');
            
            $table->foreign('card_type_id')->references('id')->on('card_types')->onDelete('cascade')->onUpdate('cascade');
            $table->index('card_type_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_types');
    }
};
