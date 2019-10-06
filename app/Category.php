<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'order', 'color', 'color_text'];

    public function columns(){
        return $this->hasMany('App\Column');
    }
}
