<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Funcionarios;
use Faker\Generator as Faker;

$factory->define(Funcionarios::class, function (Faker $faker) {
    return [
        'nome' => $faker->name(),
        'telefone' => $faker->phoneNumber(),
        'nascimento' => $faker->dateTimeThisCentury('now'),
        'cidade' => $faker->name('male')
    ];
});
