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
        Schema::create('custumers', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nuallable();
            $table->foreignId('contact_id')->nullable()->cascadeOnDelate();
            // $table->foreignId('balance_id')->nullable()->cascadeOnDelate();
            // $table->foreignId('list_diff_id')->nullable()->cascadeOnDelate();
            // $table->foreignId('campagne_id')->nullable()->cascadeOnDelate();
            $table->string('last_name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('siret')->unique();
            $table->string('company_name');
            $table->boolean('has_wstp_b')->default(false);
            $table->enum('statut',['unvalided','process', 'valided' ])->default('unvalided');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custumers');
    }
};
