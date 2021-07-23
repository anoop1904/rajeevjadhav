<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Nullable;

class Response extends Model
{
    use HasFactory;

    protected $guarded = ['updated_at'];
    public $timestamps = false;
}
