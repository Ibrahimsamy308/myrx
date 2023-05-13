<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PatientResetPassword;

class Meds extends Authenticatable
{
    protected $table='med';
    // public $ = null;
    const created_at = null;
    

    protected $fillable = [
        'medName',
        
    ];

   
}
