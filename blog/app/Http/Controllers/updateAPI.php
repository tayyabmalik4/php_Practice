<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postModel;

class updateAPI extends Controller
{
    //
    function update(Request $req)
    {
        $data= postModel::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password;
        $result = $data->save();
        if($result)
        {
            return "your data has been updated";
        }
        else{
            return "something is errer";
        }
        // return "your daTA  has been updated successfully";
    }

}
