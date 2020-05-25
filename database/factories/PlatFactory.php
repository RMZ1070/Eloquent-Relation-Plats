<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plat;
use App\Saveur;
use Faker\Generator as Faker;

$factory->define(Plat::class, function (Faker $faker) {

    $faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    return [

        'plat' => $faker->foodName(),
        'id_saveur' => Saveur::inRandomOrder()->first()->id,
    ];
});
