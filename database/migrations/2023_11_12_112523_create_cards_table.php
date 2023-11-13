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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('image_url')->nullable();
            $table->string('title')->nullable();
            $table->boolean('is_clickable')->default(false);
            $table->longText('text')->nullable();
            $table->string('link')->nullable();
            $table->unsignedBigInteger('card_box_id');
            
            $table->foreign('card_box_id')->references('id')->on('card_boxes')->onDelete('cascade')->onUpdate('cascade');
            $table->index('card_box_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
