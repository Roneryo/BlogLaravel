<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id('idPublicacion')->autoIncrement();
            $table->string('titulo');
            $table->string('contenido');
            $table->timestamps();

            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('idEstado');

            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idEstado')->references('idEstado')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
}
