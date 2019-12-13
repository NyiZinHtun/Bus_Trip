<?php

use Faker\Generator as Faker;
use App\BusStation;
use App\City;

$factory->define(BusStation::class, function (Faker $faker) {
    return [
            'name'=>$faker->name,
            'name_mm'=>$faker->name,
            'city_id'=>function(){
                return City::all()->random()->id;
            }

    ];
});
