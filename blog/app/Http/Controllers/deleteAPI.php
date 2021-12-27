<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postModel;

class deleteAPI extends Controller
{
    //
    function delete($id)
{
    $data = postModel::find($id);
    $result = $data->delete();
    if($result){
        return "your data has been deleted ";
    }
    else{
        return "something is an errer";
    }
    // return "your data has been deleted".$id;
}
}
