<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtcDrug extends Model
{
    protected $table = 'otc_drug';
    protected $primaryKey = 'id';
 
    			
     protected $fillable = [
         'pharmacist_id','patient_id','medecine','description','quantity','price'
     ];
 
     public function pharmacist() 
     {
         return $this->belongsTo(pharmacist::class, 'pharmacist_id');
     }


     
}
