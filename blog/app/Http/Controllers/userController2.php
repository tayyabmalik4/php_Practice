<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
class userController2 extends Controller
{
    // //this is the fetch database 
    // function index(){
    //     echo "db connection well be here";
    //     return DB::select("SELECT * FROM users");
    // }

    //this is the fetch database throuth model
        function getData(){
            echo "your data has been fetched in the model way";
            return user::all();
          
        }
}
