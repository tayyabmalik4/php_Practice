<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //this is the session controller tutorial and this is very important
    function session(Request $req)
    {
        $data = $req->input('username');
        $req->session()->put('username',$data);
        return redirect('profile');
        // return "thats amazing";
        // return view('session');
    }
}
