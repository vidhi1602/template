<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function modals(){
        return $this->hasMany('App\Modal');
    }
}
