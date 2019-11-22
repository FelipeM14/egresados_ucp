<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $fillable = ['title', 'name', 'order', 'category_id', 'status', 'size'];
    //trae la categoria de una columna
    public function categories(){
        return $this->belongsTo('App\Category');
    }
    //trae las opciones de una columna
    public function options(){
        return $this->hasMany('App\Option');
    }
}
