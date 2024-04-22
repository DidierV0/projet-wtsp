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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nuallable();
            $table->string('last_name')->nullable();
            $table->string('firstname')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone_number')->nullable()->unique();
            $table->string('siret')->nullable()->unique();
            $table->string('company_name')->nullable();
            $table->boolean('has_wstp_b')->default(false);
            $table->enum('status', ['unvalidated', 'processed', 'validated'])->default('unvalidated');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
