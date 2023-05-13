<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    protected $table = 'examination';
    protected $primaryKey = 'id';
 
    			
     protected $fillable = [
         'patient_id','doctor_id','drugPrescription','otcDrug','labTest','radiologyTest','review','medicationReview','rating','document','Dose'
     ];
 
     public function patient() 
     {
         return $this->belongsTo(Patient::class, 'patient_id');
     }
     
     public function doctor() 
     {
         return $this->belongsTo(Doctor::class, 'doctor_id');
     }
}
