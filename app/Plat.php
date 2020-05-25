<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    public function saveur(){

        return $this->belongsTo('App\Saveur','id_saveur');
    }
}
