<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('idUsuario');

            $table->string('nombre');
            $table->string('apellido');
            $table->string('username')->unique();

            $table->string('email')->unique();
            $table->unsignedBigInteger('idEstado');
            $table->unsignedBigInteger('idTipoUsuario');

            $table->foreign('idEstado')->references('idEstado')->on('estados');
            $table->foreign('idTipoUsuario')->references('idTipoUsuario')->on('tipoUsuario');


            $table->timestamp('fechaDesactivado');


            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
