<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('datos_personales_id')->unsigned();
            $table->bigInteger('picklist_idiomas_id')->unsigned();
            $table->bigInteger('nivel_id')->unsigned();
            $table->timestamps();
            $table->foreign('picklist_idiomas_id')->references('id')->on('picklist_idiomas')->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('niveles')->onDelete('cascade');
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
        Schema::dropIfExists('idiomas');
    }
}
