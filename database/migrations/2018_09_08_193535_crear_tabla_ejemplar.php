<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEjemplar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejemplar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ubicacion_id')->unsigned();
            $table->foreign('ubicacion_id')->references('id')->on('ubicacion');
            $table->integer('libro_id')->unsigned();
            $table->foreign('libro_id')->references('id')->on('libro');
            $table->boolean('estado')->default(0);            
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
        Schema::dropIfExists('ejemplar');
    }
}
