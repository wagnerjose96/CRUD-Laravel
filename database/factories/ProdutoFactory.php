<?php

use Faker\Generator as Faker;
require_once __DIR__ . '/../faker_date/document_number.php';

$factory->define(App\Produto::class, function (Faker $faker) {
    $nome_produtos = produtos();
    return [
        'id' => $faker->uuid,
        'codigo' => $faker->string,
        'nome' => $nome_produtos(array_rand($nome_produtos, 1)),
        'preco' => $faker->double,
    ];
});
