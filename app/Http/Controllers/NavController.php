<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function view1(){
        return view('frontView.about');
    }

    public function view2(){
        return view('frontView.service');
    }

    public function view3(){
        return view('frontView.portfolio');
    }

    public function view4(){
        return view('frontView.team');
    }

    public function view5(){
        return view('frontView.contact');
    }

    public function view6(){
        return view('frontView.home');
    }
}
