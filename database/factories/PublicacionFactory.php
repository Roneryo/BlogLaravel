<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publicaciones;
use Faker\Generator as Faker;

$factory->define(Publicaciones::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->text(10),
        'contenido'=>$faker->realText(rand(10,20)),
        'idUsuario'=>'1',
        'idEstado'=>'1',
    ];
});
