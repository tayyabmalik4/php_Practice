<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editmodel;

class editController extends Controller
{
    //
    function editData()
    {
        $data = editmodel::all();
        // echo "your data has been edit successfully";
        return view('edit',['users'=>$data]);
    }
    function edit($id)
    {
        $data = editmodel::find($id);
        return view('editfolder',['data'=>$data]);
    }
    function editfile(Request $req)
    {
        $data = editmodel::find($req->id);
        $data->username=$req->username;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->save();
        return redirect('list');
    }
}
