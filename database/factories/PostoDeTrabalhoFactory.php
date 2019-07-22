<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PostoDeTrabalho;
use Faker\Generator as Faker;

$factory->define(PostoDeTrabalho::class, function (Faker $faker) {
    return [
        'nome' => 'São Paulo',
        'info' => $faker->realText(500),
        'tipo' => 'tipo1'
    ];
});
