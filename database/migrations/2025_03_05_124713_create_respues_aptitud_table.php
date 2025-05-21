<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuesAptitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respues_aptitud', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->unsignedBigInteger('user_id'); 
            $table->string('habilidad_mas_destacada');
            $table->string('motivacion_trabajo');
            $table->string('manejo_estres');
            $table->string('mayor_logro_profesional');
            $table->string('trabajo_equipo');
            $table->string('habilidades_mejorar');
            $table->timestamp('fecha')->useCurrent();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('respues_aptitud');
    }
}
