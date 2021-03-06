<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Coach extends Authenticatable
{
    use HasFactory, Notifiable;  
    protected $table = 'coaches';
    protected $guard = 'coach';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [  
        'name',
        'email',
        'phone',
        'password',
        'qualification',
        'expertise',
        'role',
        'about',
        'photo',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
