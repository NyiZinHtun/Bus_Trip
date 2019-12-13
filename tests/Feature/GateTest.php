<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\BusStation;
use App\Gate;

class GateTest extends TestCase
{
    use RefreshDatabase;
    public function test_gate()
    {
        factory('App\City',10)->create();
        factory('App\BusStation',10)->create();
        factory('App\Gate',10)->create();
        $response = $this->get('/admin/gates');
        $response->assertStatus(200);       
    }

    public function test_gate_store(){
        factory('App\City',10)->create();
        factory('App\BusStation',10)->create();
        $data = factory('App\Gate')->make();
        $response = $this->post('admin/gates',$data->toArray());
        $this->assertEquals(1,Gate::all()->count());
    }

    public function test_gate_update(){
        factory('App\City',1)->create();
        $station = factory('App\BusStation',1)->create();
        $id = BusStation::first()->id;
        $response = $this->put('admin/gates/'.$id);
        //dd($response->getContent());
        $response->assertStatus(200); 
    }
}
