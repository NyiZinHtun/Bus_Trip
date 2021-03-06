<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Home;
use App\Gate;
use App\Bus;
use App\Seat;
use App\BusStation;
use App\Customer;
use DB;
use App;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function show_all_busstation()
    {
        $busstations = BusStation::all();
        return view('home.all_station',compact('busstations'));
    }

    public function show_all_route()
    {
        $routes = Route::all();
        $busstations = BusStation::all();
    	return view('home.select_route',compact('routes','BusStations'));
    }

    public function selectGate($id){
    	// $homes = Home::where('route_id',$route)->get();
        // session()->put('route_id',$route);
        $route = Route::find($id);
    	return view('home.select_gate',compact('route'));
    }

    public function selectBus($id)
    {
        // session()->put('gate_id',$gate->id);
        $gate = Gate::find($id);
    	return view('home.select_bus',compact('gate'));
    }

    public function selectSeat(Request $request,$id)
    {
        $route = Route::find($id);
        $bus = Bus::find($id);
        $gate = Gate::find($id);
        $home = Home::find($id);
        $bus->number_of_seats = $request->input('SelectSeat');
        $bus->save();
        // $seat = Home::where('route_id',$route->id)->first();
        return view('home.select_seat',compact('bus','gate','home','seat_arr'));
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

    public function recordCustom(Request $request,$id)
    {
        $bus = Bus::find($id);
        $home = new Home();
        $home->route_id = $request->input('route_id');
        $home->gate_id = $request->input('gate_id');
        $home->bus_id = $request->input('bus_id');
        $home->seatNo = $request->input('seatNo');
        $home->save();
        return view('home.all_info',compact('bus','home'));
    }

    public function store_information(Request $request,$id)
    {
        $home = Home::find($id);
        $customer = new Customer();
        $customer->home_id = $request->input('home_id');
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->nrc = $request->nrc;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->save();
        $to_email = "nztcu.monywa@gmail.com"; 
        Mail::to($to_email)->send(new MailNotify($customer)); 
        return view('home.cus_info',compact('home','customer'))->with('success','Your E-mail has been sent successfully.');
    }

    // public function sendEmailToUser(){
    //     $to_email = "nztcu.monywa@gmail.com"; 
    //     Mail::to($to_email)->send(new MailNotify); 
    //     return "<p> Your E-mail has been sent successfully. </p>";
    // }
    // public function lang($locale)
    // {
    //     App::setLocale($locale);
    //     session()->put('locale', $locale);
    //     return redirect()->back();
    // }

    // public function departureTime(){
    //     $times = Bus::all();
    //     // dd(response()->json($times->toArray()));
    //     return response()->json($times->toArray());
    // }
}
