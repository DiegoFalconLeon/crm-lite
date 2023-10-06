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
           // $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('means_of_contact_id')->references('id')->on('means_of_contact');
            $table->string('name','50');
            $table->string('lastname','120');
            $table->string('document','11')->nullable();
            $table->string('address')->nullable();
            $table->string('email','50')->nullable();;
            $table->string('phone','15');
            $table->char('status',1)->default('A')->comment('A: Active, I: Inactive');
            // $table->char('status',1)->default('2')->comment('0: No aceptado, 1: Concluido, 2: Por definir');
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
