<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcode extends Model
{
    use HasFactory;
    protected $table='promocode';
    public $timestamps=false;
    protected $fillable =['name','amount','startdate','enddate'];
}
