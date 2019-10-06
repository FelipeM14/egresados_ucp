<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $fillable = ['title', 'name', 'order'];

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
