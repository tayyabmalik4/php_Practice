<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mutator extends Model
{
    use HasFactory;
    public $table="employees";
    public $timestamps = false;
    public function setNameAttribute($value){
        $this->attributes['name']= "Mr ".$value;
    }
  
    public function setpasswordAttribute($value){
        $this->attributes['password']= $value . "pakistan";
     
    }
}
