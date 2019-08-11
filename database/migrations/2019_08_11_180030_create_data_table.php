<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('header')->comment('Nombre del encabezado de la tabla');
            $table->string('datum')->comment('Valor del dato');
            $table->string('data_type')->comment('Abierto para cualquier tipo de respuesta, cerrado para datos con opcion multiple');
            $table->integer('datum_required')->comment('1 si el dato es obligatorio para el egresado, 0 si no');
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
        Schema::dropIfExists('data');
    }
}
