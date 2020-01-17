<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('grado_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->bigInteger('especialidad_id')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('establecimiento');
            $table->bigInteger('datos_personales_id')->unsigned();



            $table->timestamps();

            $table->foreign('grado_id')->references('id')->on('grado')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->foreign('especialidad_id')->references('id')->on('especialidad')->onDelete('cascade');
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
        Schema::dropIfExists('estudios');
    }
}