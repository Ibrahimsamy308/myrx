<?php

namespace App\Models;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\DoctorResetPassword;



class Doctor extends Authenticatable
{


    
    
    protected $table='doctor';
    protected $guard = 'doctor';

    protected $primaryKey = 'id';
    // use HasFactory, 
    use Notifiable;

    public function sendPasswordResetNotification($token){
        $this->notify(new DoctorResetPassword($token));
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'national_id',
        'fname',
        'lname',
        'email',
        'dob',
        'address',
        'password',
        'phone',
        'specialization',
        'jobTitle',
        'gender',
        'clinc_name',
        'clinc_address',
        'clinc_phone',
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
