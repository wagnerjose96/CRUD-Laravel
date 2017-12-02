<?php

use Faker\Generator as Faker;

require_once __DIR__ . '/../../database/faker_date/document_numeber.php';

$factory->define(App\Pessoa::class, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'id' => $faker->uuid,
        'nome' => $faker->name,
        'cpf' => $cpfs[array_rand($cpfs, 1)],
        'data_nascimento' => $faker->date(),
    ];
});
