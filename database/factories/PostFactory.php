<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->text(10),
        'contenido'=>$faker->realText(rand(10,20)),
        'user_id'=>'1',
        'estado_id'=>'1',
    ];
});
