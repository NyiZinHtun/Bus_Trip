<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::(uri(user interface indicater),callback function);
Route::get('/', function () {
    return view('welcome');
    // $mytime = Carbon\Carbon::now();
    // echo $mytime->toDateTimeString();
});

Route::get('/odd_users',function(){
    //return App\user::where('id',1)->get();
    $odd =[1,3,5,7,9,11,13,15,17,19];
    // return App\user::whereIn('id',$odd)->get();
    return App\user::whereIn('id',$odd)->orderBy('id','DESC')->get();
});
Route::get('/even_users',function(){
    $even = [2,4,6,8,10,12,14,16,18,10];
    return App\user::whereIn('id',$even)->get();
});

Route::post('search_users',function(Illuminate\Http\Request $request){
    return App\User::where('name','like',"%{$request->search_name}%")->get();
});
Route::get('all_cities',function(){
    return App\City::all();
});

Route::get('asc_name',function (){
    return App\City::orderBy('name')->get();
});

Route::get('desc_name',function(){
    return App\City::orderBy('name','DESC')->get();
});

Route::get('odd_cities',function(){
    $odd=[1,3,5,7,9,11,13,15,17,19];
    return App\City::whereIn('id',$odd)->get();
});

Route::get('even_cities',function(){
    $even =[2,4,6,8,10,12,14,16,18,20];
    return App\City::whereIn('id',$even)->get();
}); 

Route::get('first',function(){
    return App\City::first();
});

Route::get('last',function(){
    return App\City::orderBy('id','DESC')->first();
});

//findOrFail
Route::get('test/{id}/find',function($id){
    //  return $city =App\City::find($id);
    return $city =App\City::findOrFail($id);    
});

//massassigment 
Route::get('mass_city/store',function(){
  $request = ['name'=>'monywa','name_mm'=>'monywa'];
  return App\City::create([
      'name'=> $request['name'],
      'name_mm'=>$request['name_mm']
  ]);
});

//equloent create
Route::get('elq_city/store',function(){
    $request = ['name'=>'Mandalay','name_mm'=>'Mandalay'];
    $city = new App\City;
    $city->name = $request['name'];
    $city->name_mm = $request['name_mm'];
    $city->save();
});

//query_builder insert
Route::get('qbuild_city/store',function(){
    $request = ['name'=>'NayPyi Taw','name_mm'=>'Nay Pyi Taw'];
    DB::table('cities')->insert(
        [
            'name'=>$request['name'],
            'name_mm'=>$request['name_mm']
        ]);
    
});

//raw query
Route::get('raw_city/store',function(){
    $request = ['name'=>'Pyin Oo Lwin','name_mm'=>'Pyin Oo Lwin'];
    $name = $request['name'];
    $name_mm = $request['name_mm'];
    DB::insert("insert into cities(name,name_mm) values ('$name','$name_mm')");
});

//secure_raw 
Route::get('secure_raw/store',function(){
    // $name = 'YeU';
    // $name_mm = 'YeU';
    DB::insert('insert into cities(name,name_mm) values (?,?)',['Taze','Taze']);
});

Route::get('new_city/{name}/{name_mm}',function(){
    $request = ['name'=>'bago','name_mm'=>'bago'];
    return App\City::create([
        'name'=> $request['name'],
        'name_mm'=>$request['name_mm']
    ]);
});

