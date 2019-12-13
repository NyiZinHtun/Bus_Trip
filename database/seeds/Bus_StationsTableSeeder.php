<?php

use Illuminate\Database\Seeder;

class Bus_StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\BusStation::class,3)->create();
    }
}
