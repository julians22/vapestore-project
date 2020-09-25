<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 5),
        'name' => $faker->sentence(),
        'price' => $faker->randomNumber(5),
        'stock' => rand(1, 10),
    ];
});
