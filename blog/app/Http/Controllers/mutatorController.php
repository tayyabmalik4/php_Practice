<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mutator;

class mutatorController extends Controller
{
    //
    function mutator(){
    //   return mutator::all();
    $mutator = new mutator;
    $mutator->name='uzair';
    $mutator->email='uzair@gmail.com';
    $mutator->password='kasur';
    $mutator->save();
    }
}
