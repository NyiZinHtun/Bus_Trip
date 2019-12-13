<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\City;

class CityTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    
    public function test_get_cities()
    {
        $cities = factory('App\City',10)->create();
        $response = $this->get('admin/cities');
        $response->assertStatus(200);
    }

    public function test_store_cities()
    {
        $data = factory('App\City')->make();
        $response = $this->post('admin/cities',$data->toArray());
        $this->assertEquals(2,City::all()->count());
        //dd($response->getContent());
    }
}
