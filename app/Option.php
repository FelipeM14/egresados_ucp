<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable=['text'];

    public function columns (){

        return $this->belongsTo('App\Column');
    }
}
