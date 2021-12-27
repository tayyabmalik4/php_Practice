<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\getAPIModel;

class getAPI extends Controller
{
    //
    function getAPI()
    {
        return getAPIModel::all();
    }
}
