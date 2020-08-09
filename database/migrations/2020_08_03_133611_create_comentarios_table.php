<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('idComentario')->autoIncrement();
            $table->text('comentario');

            $table->unsignedBigInteger('idUsuario')->nullable();
            $table->unsignedBigInteger('idPublicacion')->nullable();
            $table->unsignedBigInteger('idEstado')->nullable();

            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idPublicacion')->references('id')->on('publicaciones');
            $table->foreign('idEstado')->references('id')->on('estados');

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
