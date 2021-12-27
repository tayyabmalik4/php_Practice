<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class accessController extends Controller
{
    //
    function access()
    {
        return user::all();
    }
}
