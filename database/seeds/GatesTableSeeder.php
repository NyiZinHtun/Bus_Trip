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
            ['name'=>'Elite','name_mm'=>'အီလိုက်််လ်','route_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'Famous','name_mm'=>'ဖေးမတ်','route_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'ShweSinSattKyar','name_mm'=>'ရွှေစင်စကြာ်','route_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'JJ','name_mm'=>'ဂျေဂျေ','route_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'Shwe Mandalar','name_mm'=>'ရွှေမန်တလာ','route_id'=>1,'bus_fee'=>'10000 MMK'],
            ['name'=>'Elite','name_mm'=>'အီလိုက်််လ်','route_id'=>2,'bus_fee'=>'20000 MMK'],
            ['name'=>'Famous','name_mm'=>'ဖေးမတ်','route_id'=>2,'bus_fee'=>'15000 MMK'],
            ['name'=>'ShweSinSattKyar','name_mm'=>'ရွှေစင်စကြာ်','route_id'=>2,'bus_fee'=>'12000 MMK'],
            ['name'=>'JJ','name_mm'=>'ဂျေဂျေ','route_id'=>2,'bus_fee'=>'10000 MMK'],
            ['name'=>'Shwe Mandalar','name_mm'=>'ရွှေမန်တလာ','route_id'=>2,'bus_fee'=>'9000 MMK'],
            ['name'=>'Elite','name_mm'=>'အီလိုက်််လ်','route_id'=>3,'bus_fee'=>'18000 MMK'],
            ['name'=>'Famous','name_mm'=>'ဖေးမတ်','route_id'=>3,'bus_fee'=>'15000 MMK'],
            ['name'=>'ShweSinSattKyar','name_mm'=>'ရွှေစင်စကြာ်','route_id'=>3,'bus_fee'=>'15000 MMK'],
            ['name'=>'JJ','name_mm'=>'ဂျေဂျေ','route_id'=>3,'bus_fee'=>'15000 MMK'],
            ['name'=>'Shwe Mandalar','name_mm'=>'ရွှေမန်တလာ','route_id'=>3,'bus_fee'=>'15000 MMK']
        ];
        foreach($gates as $gate){
            Gate::create($gate);
        }
        // Factory(App\Gate::class,2)->create();
    }
}
