<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //
    function Database()
    {
        return DB::table('users')->get();
        // return "your database result";

    }
}
