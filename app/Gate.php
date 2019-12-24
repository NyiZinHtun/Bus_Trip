<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bus;
use App\BusStation;
class Gate extends Model
{
    public function buses(){
        return $this->hasMany(Bus::class);
    }

    public function route(){
        return $this->belongsTo(Route::class);
    }

    // public function home(){
    //     return $this->belongsTo(Home::class);
    // }

    protected $fillable=['name','name_mm','route_id'];
    protected $table='gates';
}
