<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class operationcontroller extends Controller
{
    //
    function operation()
    {
        // return DB::table('users')->get('id');
        // return DB::table('users')->sum('id');
        // return DB::table('users')->avg('id');
        // return DB::table('users')->max('id');
        // return DB::table('users')->min('id');
        // return DB::table('users')->count('id');


        //this is the join condition apply
        return DB::table('users')
        // ->join('employees','employees.id',"=",'employees.name')
        ->select('users.password')
        ->get();
}
}