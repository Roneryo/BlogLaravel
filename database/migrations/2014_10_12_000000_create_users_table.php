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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->string('nombre');
            $table->string('apellido');
            $table->string('username')->unique();

            $table->string('email')->unique();

            $table->timestamp('fechaDesactivado')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('tipousuario_id');

            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('tipousuario_id')->references('id')->on('tipoUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
