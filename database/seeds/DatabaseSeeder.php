<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        // $this->call(CitiesTableSeeder::class);
        // $this->call(Bus_StationsTableSeeder::class);
        // $this->call(GatesTableSeeder::class);
        // $this->call(BusesTableSeeder::class);
        //  $this->call(RoutesTableSeeder::class);
        // $this->call(HomesTableSeeder::class);
       $this->call(SeatsTableSeeder::class);
    }
}
