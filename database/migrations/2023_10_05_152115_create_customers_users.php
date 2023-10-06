<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('description','200')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->char('status',1)->default('2')->comment('0: No aceptado, 1: Concluido, 2: Por definir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_users');
    }
};
