<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function uf(){
        return $this->belongsTo('App\UF');
    }
}
