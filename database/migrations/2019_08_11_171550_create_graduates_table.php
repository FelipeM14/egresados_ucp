<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_y_apellidos')->nullable();
            $table->string('codigo')->nullable();
            $table->string('fecha_graduacion')->nullable();
            $table->string('telefono3')->nullable();
            $table->string('correo_electronico3')->nullable();
            $table->string('ocupacion3')->nullable();
            $table->string('labora3')->nullable();
            $table->string('cargo3')->nullable();
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
        Schema::dropIfExists('graduates');
    }
}
