<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Home;
use App\Gate;
use App\Bus;
use App\Seat;
use App\BusStation;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_all_busstation()
    {
        $busstations = BusStation::all();
        return view('home.all_station',compact('busstations'));
    }

    public function index(){
    	$routes = Route::all();
    	return view('home.select_route',compact('routes'));
    }
    public function selectGate($route){
    	$homes = Home::where('route_id',$route)->get();
        session()->put('route_id',$route);
    	return view('home.select_gate',compact('homes'));
    }
    public function selectBus(Gate $gate)
    {
        session()->put('gate_id',$gate->id);
    	return view('home.select_bus',compact('gate'));
    }
    public function selectSeat($bus)
    {
        $seats = Seat::where('bus_id',$bus)->get();
        return view('home.select_seat',compact('seats'));
    }
    public function searchRoute(Request $request)
    {
    	$q = $request->q;
        $route = Route::where('route_name','LIKE','%'.$q.'%')->orWhere('from_id','LIKE','%'.$q.'%')->get();
        if (count($route) > 0)
            return view('home.select_route')->withDetails($route)->withQuery($q);
        else return view('home.select_route')->withMessage('No Details found.Try to search again!');
    }
     public function searchGate(Request $request)
    {
        $q = $request->q;
        $route_id = session()->get('route_id');
        $gate_id = Home::where('route_id',$route_id)->pluck('gate_id');
        // $gates =Gate::where('id',$gate_id)->where('name','LIKE','%'.$q.'%')->orWhere('name_mm','LIKE','%'.$q.'%')->get();
        $gates = DB::table('gates')->leftJoin('homes','gates.id','=','homes.gate_id')->where('homes.route_id','=',$route_id)->where('gates.name','LIKE','%'.$q.'%')->select('gates.id','gates.name')->get();
        if (count($gates) > 0)
            return view('home.select_gate')->withDetails($gates)->withQuery($q) ;
        else return view('home.select_gate')->withMessage('No Details found.Try to search again!');
    }
     public function searchBus(Request $request)
    {
       $q = $request->q;
       $gate_id = session()->get('gate_id');
       // dd($gate_id);
       $buses =Bus::where('gate_id',$gate_id)->where('bus_no','LIKE','%'.$q.'%')->get();
       if (count($buses) > 0)
            return view('home.select_bus')->withDetails($buses)->withQuery($q) ;
        else return view('home.select_bus')->withMessage('No Details found.Try to search again!');
    }
    public function searchSeat(Request $request)
    {
       $q = $request->q;
       $seats = Seat::where('seat_no','LIKE','%'.$q.'%')->get();
       if(count($seats) > 0){
        return view('home.select_seat')->withDetails($seats)->withQuery($q);
       }
       else return view('home.select_bus')->withMessage('No Details found.Try to search again!');

    }

    public function depatureTime(){
        $times = Bus::all();
        return response()->json($times->toArray());
    }
}

