<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosfamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosfamiliares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->bigInteger('familiar_id')->unsigned();
            $table->bigInteger('datos_personales_id')->unsigned();

            $table->string('genero');
            
            $table->date('fecha_de_nacimiento');
            $table->string('cuil')->nullable();
            $table->string('nacionalidad')->nullable();


            $table->timestamps();



            $table->foreign('familiar_id')->references('id')->on('familiar')->onDelete('cascade');
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
        Schema::dropIfExists('datosfamiliares');
    }
}
