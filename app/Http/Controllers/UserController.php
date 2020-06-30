<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class UserController extends Controller
{
    public function data(Request $req)
    {
        //return $req->input();
        $user = new Data;
        $user->email=$req->email;
        $user->password=$req->password;
        echo $user->save();

    }
}
