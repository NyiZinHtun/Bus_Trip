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

    public function bus_station(){
        return $this->belongsTo(BusStation::class);
    }
    
    protected $fillable=['name','name_mm','bus_station_id'];
    protected $table='gates';
}
