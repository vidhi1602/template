<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Modal;

class NewController extends Controller
{
    public function check(){
        $car=Car::find(1);
        $modal= new Modal(['name'=>"nano"]);
        $car->modal()->save($modal);
        return "successfully inserted";
    }
 
    public function search($id){
        $car=Car::whereName($id)->first();
        $modals=$car->modals()->get();
        foreach($modals as $modal){
            echo $modal->name.'<br>';
        }
    }
}
