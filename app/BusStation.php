<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusStation extends Model
{
    protected $fillable=['name','name_mm','city_id'];
    protected $table='bus_stations';

    public function city(){
        return $this->belongsTo(City::class);
    }
}
