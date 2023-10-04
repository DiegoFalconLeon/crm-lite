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
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('means_of_contact_id')->references('id')->on('means_of_contact');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('document')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->char('status',1)->default('A')->comment('A: Active, I: Inactive');
            $table->timestamps();
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
