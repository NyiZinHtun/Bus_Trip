<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gate;
Use App\BusStation;

class GateController extends Controller
{
   
    public function index()
    {
        $gates = Gate::all();
        return view('Admin.gate.index',compact('gates'));
    }

    
    public function create()
    {
        $busstations = BusStation::all();
        return view('Admin.gate.create',compact('busstations'));
    }

    public function store(Request $request)
    {
       Gate::create(request(['name','name_mm','bus_station_id']));
       return redirect('admin/gate');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit(Gate $gate)
    {
        $busstations = BusStation::all();
        return view('Admin/gate/edit',compact('gate','busstations'));
    }

    public function update(Request $request,Gate $gate)
    {
        $gate->update(request(['name','name_mm','bus_station_id']));
        return redirect('admin/gate');
    }

    public function destroy($id)
    {
        //
    }
}
