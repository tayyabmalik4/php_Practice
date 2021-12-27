<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsubmit extends Controller
{
    //this controller is use to form submit methods like get post put and delete
    function submit(Request $req)
    {
        // return "your data has been submit successfully";
        return $req->input();
    }
}
