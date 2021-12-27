<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
// {
//     function show($id){
//         // return "hello controller";
//         return $id;
//     }
// }
// {
//     function viewpage($user){
        
//         return view('user', ['name'=>$user]);
//     }
// }
{
    function viewpage(){
        $data = ['tayyab', 'junaid','zahid', 'uzair','zaheer', 'mohsan'];
        // return view("user",["test"=>$data]);
        return view("users",["test"=>$data]);
    }
}
