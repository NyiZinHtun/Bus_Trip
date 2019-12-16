<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;

class Route extends Model
{
    public function from_city(){
        return $this->belongsTo(City::class,'from_id');
    }

    public function to_city(){
        return $this->belongsTo(City::class,'to_id');
    }

}
