<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delete;

class deleteController extends Controller
{
    //
    function list(){
        $data = delete::all();
        // echo "delete the data in data base";
        return view('listdelete',['users'=>$data]);
    }
    function delete($id)
{
    $list = delete::find($id);
    $list->delete();
    return redirect('delete');
}
}
