<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable =[
        'name','name_mm'
    ];
    protected $table='cities';

    public function route(){
        return $this->belongsTo(Route::class);
    }
}
