<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $fillable = ['title', 'name', 'order', 'category_id', 'status', 'size'];

    public function categories(){
        return $this->belongsTo('App\Category');
    }

    public function options(){
        return $this->hasMany('App\Option');
    }
}
