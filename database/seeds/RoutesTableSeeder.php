<?php

use Illuminate\Database\Seeder;
use App\Route;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            ['route_name'=>'Yangon=>Mandalay','from_id'=>1,'to_id'=>2],
            ['route_name'=>'Yangon=>NayPyiTaw','from_id'=>1,'to_id'=>3],
            ['route_name'=>'Yangon=>Monywa','from_id'=>1,'to_id'=>4]
        ];
        foreach($routes as $route){
            Route::create($route);
        }

        // Factory(App\Route::class,3)->create();
    }
}
