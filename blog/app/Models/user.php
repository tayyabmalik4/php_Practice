<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public $table="employees";
    // public $timestamps=false;
    public function getNameAttribute($value)
    {
        return ucFirst($value);
    }
    public function getpasswordAttribute($value)
    {
        return $value.',tayyab';
    }
}
