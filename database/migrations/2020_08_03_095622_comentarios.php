<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('idComentario');
            $table->text('comentario');

            $table->unsignedBigInteger('Usuario');
            $table->unsignedBigInteger('idPublicacion');
            $table->unsignedBigInteger('idEstado');

            $table->foreign('Usuario')->references('idUsuario')->on('usuarios');

            // $table->foreign('idPublicacion')->references('idPublicacion')->on('publicaciones');

            $table->foreign('idEstado')->references('idEstado')->on('estados');

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
        Schema::dropIfExists('comentarios');
    }
}
