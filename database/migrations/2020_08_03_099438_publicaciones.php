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
            $table->id('idPublicacion');

            $table->string('titulo');
            $table->string('contenido');
            $table->timestamps();

            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('idComentario');
            $table->unsignedBigInteger('idEstado');

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
            $table->foreign('idEstado')->references('idEstado')->on('estados');
            $table->foreign('idComentario')->references('idComentario')->on('comentarios');
            // $table->foreign('publicacion_id')->references('id')->on('usuarios');
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
