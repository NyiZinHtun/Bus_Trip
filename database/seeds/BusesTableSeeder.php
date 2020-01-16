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
            ['bus_no' => 'YGN-5079','gate_id' => '5','departure_time'=>'8:00 PM'],
            ['bus_no' => 'YGN-2036','gate_id' => '6','departure_time'=>'10:00 PM'],
            ['bus_no' =>'YGN-8888','gate_id' => '7','departure_time'=>'5:00 PM'],
            ['bus_no' => 'YGN-5886','gate_id' => '8','departure_time'=>'6:00 PM'],
            ['bus_no' => 'YGN-3222','gate_id' => '9','departure_time'=>'7:00 PM'],
            ['bus_no' => 'YGN-0079','gate_id' => '10','departure_time'=>'8:00 PM'],
            ['bus_no' => 'YGN-0036','gate_id' => '11','departure_time'=>'10:00 PM'],
            ['bus_no' =>'YGN-9973','gate_id' => '12','departure_time'=>'5:00 PM'],
            ['bus_no' => 'YGN-2596','gate_id' => '13','departure_time'=>'6:00 PM'],
            ['bus_no' => 'YGN-5874','gate_id' => '14','departure_time'=>'7:00 PM'],
            ['bus_no' => 'YGN-0029','gate_id' => '15','departure_time'=>'8:00 PM']
        ];
        foreach($buses as $bus){
            Bus::create($bus);
        }
    }
}
