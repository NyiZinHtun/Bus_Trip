<?php

use Faker\Generator as Faker;
use App\Home;
use App\Route;
use App\Gate;

$factory->define(Home::class, function (Faker $faker) {
    return [
        'route_id'=>function(){
            return Route::all()->random()->id;
        },
        'gate_id'=>function(){
            return Gate::all()->random()->id;
        }
    ];
});
