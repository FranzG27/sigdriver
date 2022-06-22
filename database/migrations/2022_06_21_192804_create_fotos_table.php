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
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->unsignedBigInteger('conductor_id')->nullable();
            $table->unsignedBigInteger('microbus_id')->nullable();
            $table->foreign('conductor_id')->references('id')->on('conductors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('microbus_id')->references('id')->on('microbuses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('fotos');
    }
};
