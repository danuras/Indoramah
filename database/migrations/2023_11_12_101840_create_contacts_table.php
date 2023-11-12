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
            $table->string('whatsapp');
            $table->string('whatsapp_messsage');
            $table->string('call_number');
            $table->string('address');
            $table->string('email');
            $table->string('info_contact');
            $table->string('embeded_map_url');
            $table->string('info_location');
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
