<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataAPI extends Controller
{
    //
    function dataAPI()
    {
        return
        ['name'=>'tayyab','email'=>'tayyabmalik99@ggmail.com','password'=>'kasur'];
    }
}
