<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gate;

class Home extends Model
{
    public function bus(){
        return $this->belongsTo(Bus::class);
    }
    
    public function route(){
        return $this->belongsTo(Route::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function seat(){
        $seat = Home::where('route_id',$this->id)->where('gate_id',$this->id)->where('bus_id',$this->id)->where('seatNo',explode(" ",$this->seatNo));
        if($seat){
            return true;
        }else{
            return false;
        }
    }
}		