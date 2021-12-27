<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class memberController extends Controller
{
    //
    function addData(Request $req){
        $user= new user;
        $user->username=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        // echo "your data has been saved in database";
        return redirect('add');
    }
}
