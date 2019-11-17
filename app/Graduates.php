<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduates extends Model
{
    //scopes
    public function scopeCodigo($query, $codigo){
        if ($codigo)
            return $query->where('codigo',$codigo);
    }
}
