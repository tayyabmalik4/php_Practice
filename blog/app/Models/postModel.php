<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postModel extends Model
{
    use HasFactory;
    public $table = "employees";
    public $timestamps = false;
}
