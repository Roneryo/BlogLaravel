<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentarios;
use Faker\Generator as Faker;

$factory->define(Comentarios::class, function (Faker $faker) {
    return [
        'comentario'=>$faker->text(30),
        'idUsuario'=>rand(1,9),
        'idPublicacion'=>rand(1,4),
        'idEstado'=>1
    ];
});
