<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tipoID')->unsigned();
            $table->bigInteger('codigoID')->unsigned();
            $table->bigInteger('numero');

            $table->timestamps();
            $table->foreign('codigoID')->references('id')->on('picklist_codigos')->onDelete('cascade');
            $table->foreign('tipoID')->references('id')->on('picklist_tipo_tel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tel');
    }
}
