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
        Schema::create('card_types', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->json('images')->nullable();
            $table->longText('text')->nullable();
            $table->string('whatsapp_message')->nullable();
            $table->string('type')->nullable();
            $table->string('sub_content_title')->nullable();
            $table->unsignedBigInteger('card_id');
            
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade')->onUpdate('cascade');
            $table->index('card_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_types');
    }
};
