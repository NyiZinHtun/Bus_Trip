<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bus;
use App\Gate;

class BusController extends Controller
{
    
    public function index()
    {
        $buses = Bus::all();
        return view('Admin.bus.index',compact('buses'));
    }

    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

 
    public function show($id)
    {
        //
    }

   
    public function edit(Bus $bus)
    {
        $gates = Gate::all();
        return view('Admin.bus.edit',compact('bus','gates'));
    }

  
    public function update(Request $request, Bus $bus)
    {
        $bus->update(request(['bus_no','gate_id','total_seat']));
        return redirect('admin/bus');
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();
        return redirect('admin/bus');
    }
}
