<?php

use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    $produtos = produtos();
    return [
        'codigo' => $faker->rgbColor, //so foi colcado esse para gerar dados facticios
        'nome' => $produtos[array_rand($produtos, 1)],
        'preco' => $faker->randomFloat(2, 0, 100),
    ];
});
