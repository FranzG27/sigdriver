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
        Schema::create('microbuses', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('modelo');
            $table->integer('cantidad_asientos');
            $table->integer('linea');
            $table->integer('numero_interno');
            $table->date('fecha_asignacion');
            $table->date('fecha_baja');
            $table->unsignedBigInteger('conductor_id');
            $table->foreign('conductor_id')->references('id')->on('conductors')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('microbuses');
    }
};
