<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Analytical extends Authenticatable
{
    protected $table='analytical';
    protected $guard = 'analytical';
    
    protected $primaryKey = 'id';
    // use HasFactory, 
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'association_id',
        'fname',
        'lname',
        'email',
        'dob',
        'address',
        'password',
        'phone',
        'gender',
        'lab_name',
        'lab_address',
        'lab_phone',
        'working_time',
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
