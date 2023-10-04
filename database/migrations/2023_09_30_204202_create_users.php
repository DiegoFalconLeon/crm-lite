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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->char('role',1)->default('U')->comment('U: User, A: Admin');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->char('status',1)->default('A')->comment('A: Active, I: Inactive');
            $table->timestamps();//creado y modificado
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
