<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_package extends Model
{
    use HasFactory;
    protected $table='user_package';
    public $timestamps=false;
    protected $guarded =[];
}
