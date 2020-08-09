<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comentario'=>$faker->text(30),
        'user_id'=>rand(1,9),
        'post_id'=>rand(1,4),
        'estado_id'=>1
    ];
});
