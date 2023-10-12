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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("document", 11)->unique();
            $table->string("address", 100);
            $table->string('phone', 11)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('website', 100)->nullable();
            $table->string("image", 100)->nullable()->default("default.png");
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
        Schema::dropIfExists('company');
    }
};
