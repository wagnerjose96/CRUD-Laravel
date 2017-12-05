<?php

use Faker\Generator as Faker;

require_once __DIR__ . '/../faker_date/document_number.php';

$factory->define(App\Pessoa::class, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'nome' => $faker->name,
        'cpf' => $cpfs[array_rand($cpfs, 1)],
        'data_nascimento' => $faker->date(),
    ];
});
