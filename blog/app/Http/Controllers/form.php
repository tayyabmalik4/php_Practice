<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    //
    function login(Request $req)
    {
        // return view("form");
        // echo "this form has been submitted successfully";
        return $req->input();
    }
}
