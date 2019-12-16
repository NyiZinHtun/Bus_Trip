<?php

use Faker\Generator as Faker;
use App\Bus;
use App\Seat;

$factory->define(Seat::class, function (Faker $faker) {
    return [
        
        'seat_no' =>'',
    	'bus_id' => function(){
    		return Bus::all()->random();
    	}
    ];
});
