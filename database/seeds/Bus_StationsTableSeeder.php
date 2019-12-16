<?php

use Illuminate\Database\Seeder;
use App\BusStation;

class Bus_StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $busstations = [
            ['name'=>'Aungmingalar','name_mm'=>'အောင်မဂ်လာ','city_id'=>1]
        ];
        foreach($busstations as $busstation){
            BusStation::create($busstation);
        }
        // Factory(App\BusStation::class,1)->create();
    }
}
