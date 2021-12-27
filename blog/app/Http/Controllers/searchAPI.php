<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postModel;

class searchAPI extends Controller
{
    //
    function search($name)
    {
        return postModel::where("name","like","%".$name."%")->get();
        // return "your data has been searched";

    }
}
