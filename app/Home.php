<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gate;

class Home extends Model
{
    public function gate(){
        return $this->belongsTo(Gate::class);
    }
    
    
}