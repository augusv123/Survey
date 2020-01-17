<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciaLaboralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_laboral', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('datos_personales_id')->unsigned();
            $table->string('empresa');
            $table->string('sector');
            $table->string('puesto');
            $table->date('fecha_incio');
            $table->date('fecha_fin');
            $table->timestamps();

            $table->foreign('datos_personales_id')->references('id')->on('datos_personales')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencia_laboral');
    }
}
