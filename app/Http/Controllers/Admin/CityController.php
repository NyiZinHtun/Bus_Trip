<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City;

class CityController extends Controller
{
    
    public function index()
    {
       $cities = City::orderBy('id','DESC')->paginate(5);
       return view('Admin.city.index',compact('cities'));
    }

    public function create()
    {
        return view('Admin.cities.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'name_mm'=>'required'
        ],
    [
        'name.required'=>'name required!',
        'name_mm.required'=>'name_mm required!'
    ]);
        City::create(request(['name','name_mm']));
        return redirect('/admin/cities');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(City $city)
    {
        return view('Admin.city.edit',compact('city'));
    }

    
    public function update(Request $request,City $city)
    {
        $city->update(request(['name','name_mm']));
        return redirect('/admin/cities');
    }

   
    public function destroy(City $city)
    {
        $city->delete();
        return redirect('/admin/cities');
    }
}
