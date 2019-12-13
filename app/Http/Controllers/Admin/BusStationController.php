<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BusStation;
use App\City;

class BusStationController extends Controller
{
    
    public function index()
    {
        $busstations = BusStation::all();
        return view('Admin.station.index',compact('busstations'));
    }
   
    public function create()
    {
        $cities = City::all();
        return view('Admin.station.create',compact('cities'));
    }

  
    public function store(Request $request)
    {
        BusStation::create(request(['name','name_mm','city_id']));
        return redirect('admin/busstation');
    }

    public function show(BusStation $busstation)
    {
        return view('Admin.station.show',compact('busstation','city'));
    }

   
    public function edit(BusStation $busstation)
    {
        $cities = City::all();
        return view('Admin.station.edit',compact('busstation','cities'));
    }

    public function update(Request $request,BusStation $busstation)
    {
        $busstation->update(request(['name','name_mm','city_id']));
        return redirect('/admin/busstation');
    }

    public function destroy(BusStation $busstation)
    {
        $busstation->delete();
        return redirect('/admin/busstation');
    }
}
