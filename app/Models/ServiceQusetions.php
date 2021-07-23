<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceQusetions extends Model
{
    use HasFactory;
    protected $table = 'service_question';
    public $timestamps = false;
    protected $fillable = ['id','coach_id','ques'];
}
