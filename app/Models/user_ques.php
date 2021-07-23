<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_ques extends Model
{
    use HasFactory;
      protected $table = 'user_ques';
    public $timestamps = false;
    protected $fillable = ['coach_id','ques', 'status'];
}
