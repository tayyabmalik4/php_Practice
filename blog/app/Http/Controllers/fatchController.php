<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fatch;
class fatchController extends Controller
{
    //
function fatch(){
    $data = fatch::all();
    return view('fatch',['users'=>$data]);
}
}
