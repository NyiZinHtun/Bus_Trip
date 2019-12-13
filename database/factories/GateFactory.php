<?php

use Faker\Generator as Faker;
use App\Gate;
use App\BusStation;

$factory->define(Gate::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'name_mm'=>$faker->name,
        'bus_station_id'=>function(){
            return BusStation::all()->random()->id;
        }
    ];
});
