<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatospersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datospersonales', function (Blueprint $table) {
            $table->bigInteger('legajo')->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni');
            $table->string('cuil');
            $table->date('fecha_de_nacimiento');
            $table->date('fecha_de_ingreso');


            $table->bigInteger('empresa_id')->unsigned();
            $table->bigInteger('pais_de_nacimiento')->unsigned();
            $table->bigInteger('provincia_de_nacimiento')->unsigned();
            $table->bigInteger('nacionalidad')->unsigned();
            $table->bigInteger('nacionalidad2')->unsigned();
            $table->bigInteger('estado_civil')->unsigned();
            $table->bigInteger('especialidad')->unsigned();
            $table->bigInteger('otros')->nullable();

            $table->string('domicilio');
            $table->string('ciudad');
            $table->bigInteger('provincia_domicilio')->unsigned();
            $table->bigInteger('codigo_postal');
            $table->bigInteger('tel_id')->unsigned();

            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('pais_de_nacimiento')->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('nacionalidad')->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('nacionalidad2')->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('provincia_de_nacimiento')->references('id')->on('provincias')->onDelete('cascade');
            $table->foreign('estado_civil')->references('id')->on('estado_civil')->onDelete('cascade');
            $table->foreign('provincia_domicilio')->references('id')->on('provincia')->onDelete('cascade');
            $table->foreign('tel_id')->references('id')->on('tel')->onDelete('cascade');
            $table->foreign('especialidad')->references('id')->on('especialidades')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datospersonales');
    }
}
