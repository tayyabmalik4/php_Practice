<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postModel;

class postAPI extends Controller
{
    //
    function post(Request $req)
    {
        $data =new postModel;
        $data->name= $req->name;
        $data->email=$req->email;
        $data->password=$req->password;
        $result=$data->save();
        if($result){
            return ["Result"=>"data has been saved"];
        }
        else{
            return ["Result"=>"operation failed"];
        }
        return "your data has bben saved in database";
    }

    
}
