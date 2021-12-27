<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class listController extends Controller
{
    //
    function list(){
        $data = user::paginate(2);
        return view('list',['users'=>$data]);
        // return "your data is not fatched in this moment";

    }
}
