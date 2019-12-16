<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Yangon','name_mm' => 'ရန်ကုန်'],
            ['name' =>'Mandalay','name_mm' => 'မန်းတလေး'],
            ['name' => 'Monywa','name_mm' => 'မုံရွာ'],
            ['name' => 'NayPyiTaw','name_mm' => 'နေပြည်တော်']
        ];
        foreach($cities as $city){
            City::create($city);
        }
        // Factory(App\City::class,3)->create();
    }
}
