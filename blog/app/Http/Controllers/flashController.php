<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashController extends Controller
{
    //this is the flash sessiontutorial this is mainaly use in one time disply on user and this is not a important
    function flash(Request $req){
        // return "hey we are learn a flash Session tutorial";
        $data = $req->input('email');
      $req->session()->flash('email',$data);
      return redirect('flash');

    }
}