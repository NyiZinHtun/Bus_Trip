<?php

use Illuminate\Database\Seeder;

class GatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Gate::class,2)->create();
    }
}
