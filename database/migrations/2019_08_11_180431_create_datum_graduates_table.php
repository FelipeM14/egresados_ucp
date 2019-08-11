<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatumGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voi
     */
    public function up()
    {
        Schema::create('datum_graduates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('datum_id')->unsigned();
            $table->foreign('datum_id')->references('id')->on('data');
            $table->integer('graduate_id')->unsigned();
            $table->foreign('graduate_id')->references('id')->on('graduates');
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
        Schema::dropIfExists('datum_graduates');
    }
}
