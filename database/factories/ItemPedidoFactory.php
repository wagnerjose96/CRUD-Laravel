<?php

use Faker\Generator as Faker;

$factory->define(App\ItemPedido::class, function (Faker $faker) {
    $produtos = \App\Produto::all('id');
    return [
        'produto_id' => array_rand($produtos, 1),
        'quantidade' => $faker->randomFloat(2, 0, 100),
        'preco' => $faker->randomFloat(2, 0, 100),
        'desconto' => $faker->randomFloat(2, 0, 90),
        'total' => (('quantidade' * 'preco') * 'desconto' / 100)
    ];
});
