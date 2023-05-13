<?php

namespace App\models;

use App\Models\Analytical;
use App\Models\Radiologist;
use Illuminate\Database\Eloquent\Model;

class LabRadiology extends Model
{
    protected $table = 'lab_radiology_test';
    protected $primaryKey = 'id';
 
    			
     protected $fillable = [
        'radiologist_id','analytical_id','type','description','patient_id','document','price','pharmacist_id','price'
     ];
 
     public function radiologist() 
     {
         return $this->belongsTo(Radiologist::class, 'radiologist_id');
     }

     public function analytical() 
     {
         return $this->belongsTo(Analytical::class, 'analytical_id');
     }
     

}
