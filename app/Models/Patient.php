<?php



namespace App\Models;



use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use App\Notifications\PatientResetPassword;



class Patient extends Authenticatable

{

    protected $table='patient';

    protected $guard = 'patient';

    

    protected $primaryKey = 'id';

    // use HasFactory, 

    use Notifiable;



    public function sendPasswordResetNotification($token){

        $this->notify(new PatientResetPassword($token));

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

        'age',

        'address',

        'password',

        'phone',

        'gender',

        'height', 'weghit', 'bloodPresure','bloodType', 'glucoseLevel','chronicDisases','vaccination','document'

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

