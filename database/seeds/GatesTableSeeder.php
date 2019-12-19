<?php

use Illuminate\Database\Seeder;
use App\Gate;

class GatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gates = [
            ['name'=>'Elite','name_mm'=>'အီလိုက်််လ်','bus_station_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'Famous','name_mm'=>'ဖေးမတ်','bus_station_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'ShweSinSattKyar','name_mm'=>'ရွှေစင်စကြာ်','bus_station_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'J&J','name_mm'=>'ဂျေ & ဂျေ','bus_station_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'Shwe Mandalar','name_mm'=>'ရွှေမန်တလာ','bus_station_id'=>1,'bus_fee'=>'10000 MMK']
        ];
        foreach($gates as $gate){
            Gate::create($gate);
        }
        // Factory(App\Gate::class,2)->create();
    }
}
