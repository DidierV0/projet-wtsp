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
            $table->foreignId('customer_id');
            $table->string('last_name')->nullable();
            $table->string('firstname')->nullable();
            $table->timestamp('birthdate')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('city')->nullable();
            $table->enum('gender', ['other', 'male', 'female'])->default('male');
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
