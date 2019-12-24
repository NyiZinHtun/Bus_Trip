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

}
