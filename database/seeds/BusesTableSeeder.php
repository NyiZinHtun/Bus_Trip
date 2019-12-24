<?php

use Illuminate\Database\Seeder;
use App\Bus;

class BusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buses = [
            ['bus_no' => 'YGN-1036','gate_id' => '1','departure_time'=>'10:00 PM'],
            ['bus_no' =>'YGN-7673','gate_id' => '2','departure_time'=>'5:00 PM'],
            ['bus_no' => 'YGN-5896','gate_id' => '3','departure_time'=>'6:00 PM'],
            ['bus_no' => 'YGN-3274','gate_id' => '4','departure_time'=>'7:00 PM'],
            ['bus_no' => 'YGN-5079','gate_id' => '5','departure_time'=>'8:00 PM']
        ];
        foreach($buses as $bus){
            Bus::create($bus);
        }
    }
}
