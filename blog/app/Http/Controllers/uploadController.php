<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function file(Request $req){
       return $req->file('file')->store('img');
        // return "your file is uploaded successfully";
       
        
    }
}
