<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function country(){
        return $this->belongsTo('App\Country'); //Chaque State appartient à un country
    }

    public function companies(){
        return $this->hasMany('App\Company');
    }
}
