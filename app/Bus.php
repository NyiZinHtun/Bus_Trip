<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Seat;

class Bus extends Model
{
    public function seat(){
        return $this->hasMany(Seat::class);
    }

    public function gate(){
        return $this->belongsTo(Gate::class);
    }
    
    protected $guarded=[];
}
