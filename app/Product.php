<?php

/*
 * Created by PhpStorm.
 * User: Superwinkel
* Date: 25-5-2016
* Time: 9:38
*/ 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function file()
    {
        return $this->belongsTo('App\File');
    }
}
 
 