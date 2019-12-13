<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\BusStation;

class BusStationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_bus_station()
    {
        factory('App\City',10)->create();
        factory('App\BusStation',10)->create();
        $response = $this->get('/admin/bus_stations');
        $response->assertStatus(200);       
    }

    public function test_store_station(){
        factory('App\City')->create();
        $data = factory('App\BusStation')->make();
        $response=$this->post('admin/bus_stations',$data->toArray());
        $this->assertEquals(1,BusStation::all()->count());
    }
}
