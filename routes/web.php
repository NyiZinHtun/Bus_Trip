<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@show_all_busstation');
Route::get('select_route/{busstation}','HomeController@show_all_route');
Route::get('select_gate/{id}','HomeController@selectGate');
//Route-model binding
Route::get('select_bus/{gate}','HomeController@selectBus');
Route::get('select_gate/{id}','HomeController@selectGate');
Route::get('select_seat/{id}','HomeController@selectSeat');
Route::get('customer_info/{id}','HomeController@recordCustom');
Route::get('storecusInfo/{id}','HomeController@store_information');
Route::post('/search_route','HomeController@searchRoute');
Route::post('/search_gate','HomeController@searchGate');
Route::post('/search_bus','HomeController@searchBus');
Route::post('/search_seat','HomeController@searchSeat');

Route::get('bus_stations','BusStationController@index');
Route::get('bus_stations/{id}/edit','BusStationController@edit');

Route::group(['prefix'=>'admin','namespace'=> 'Admin'],function(){
    Route::resource('cities','CityController');
    Route::resource('busstation','BusStationController');
    Route::resource('gate','GateController');
    Route::resource('bus','BusController');
});

// Route::get('departure_time','HomeController@departureTime');
Route::get('locale', function () {
    return \App::getLocale();
});

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

// Route::view('/hello', 'hello');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


