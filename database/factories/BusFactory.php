<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Bus;
use App\Gate;

$factory->define(Bus::class, function (Faker $faker) {
    return [
        'bus_no'=>'YGN-'.$faker->randomNumber(4),
        'total_seat'=>40,
        'gate_id'=>function(){
            return Gate::all()->random();
        },
        'departure_time'=>'3:00PM'
    ];
});
