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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp');
            $table->string('whatsapp_message');
            $table->string('call_number');
            $table->string('address');
            $table->string('email');
            $table->longText('info_contact');
            $table->longText('embeded_map_url')->nullable();
            $table->longText('info_location')->nullable();
            $table->string('background_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
