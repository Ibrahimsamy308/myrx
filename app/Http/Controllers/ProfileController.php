<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Pharmacist;
use App\Models\Radiologist;
use App\Models\Analytical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Events\SecurityEmail;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    
    public function update(Request $request){
        $modelType=null;
        if (Auth::guard('patient')->user())
            // dd(Auth::guard('patient')->user()->id);
            $modelType=Patient::where('id',Auth::guard('patient')->user()->id)->First();
        elseif(Auth::guard('doctor')->user())
            $modelType=Doctor::where('id',Auth::user()->id)->First();
        elseif(Auth::guard('pharmacist')->user()){
            $modelType=Pharmacist::where('id',Auth::user()->id)->First();
        }
            
        elseif(Auth::guard('radiologist')->user()){
            $modelType=Radiologist::where('id',Auth::user()->id)->First();
            // dd($modelType);
        }
            
        elseif(Auth::guard('analytical')->user()){
            $modelType=Analytical::where('id',Auth::user()->id)->First();
        }
                

        if($modelType!="Patient"){
            // dd($request->all());
            if($request->file('file')){
                $file=$request->file('file');
                $name=$file->getClientOriginalName();
                $file->move('public/materials',$name);
                $modelType->update([
                    'fname'=>$request->input('fname'),
                    'lname'=>$request->input('lname'),
                    'phone'=>$request->input('phone'),
                    'address'=>$request->input('address'),
                    // 'password' => Hash::make($request['newPassword']),
                    'jobTitle'=>$request->input('jobTitle'),
                    'document' => $name,
                    'updated_at'=>Carbon::now('Africa/Cairo')
                    // 'photo' => $name,
                    ]);
                }else
                    $modelType->update([
                        'fname'=>$request->input('fname'),
                        'lname'=>$request->input('lname'),
                        'phone'=>$request->input('phone'),
                        'address'=>$request->input('address'),
                        // 'password' => Hash::make($request['newPassword']),
                        'jobTitle'=>$request->input('jobTitle'),
                        'updated_at'=>Carbon::now('Africa/Cairo'),
                        
                        // 'photo' => $name,
                        ]);
    
                return redirect()->route('profile');
                
        }else{

            if($request->file('file')){
                $file=$request->file('file');
                $name=$file->getClientOriginalName();
                $file->move('public/materials',$name);
                $modelType->update([
                    'fname'=>$request->input('fname'),
                    'lname'=>$request->input('lname'),
                    'phone'=>$request->input('phone'),
                    'address'=>$request->input('address'),
                    // 'password' => Hash::make($request['newPassword']),
                    'document' => $name,
                    'updated_at'=>Carbon::now('Africa/Cairo'),
                    // 'photo' => $name,
                    ]);
                }else
                    $modelType->update([
                        'fname'=>$request->input('fname'),
                        'lname'=>$request->input('lname'),
                        'phone'=>$request->input('phone'),
                        'address'=>$request->input('address'),
                        // 'password' => Hash::make($request['newPassword']),
                        'updated_at'=>Carbon::now('Africa/Cairo'),
                        
                        // 'photo' => $name,
                        ]);
            return redirect()->route('profile');
        }
    }
        
    public function change(Request $request){
        // dd($request->all());

        $modelType=null;
        if (Auth::guard('patient')->user())
            // dd(Auth::guard('patient')->user()->id);
            $modelType=Patient::where('id',Auth::guard('patient')->user()->id)->First();
        elseif(Auth::guard('doctor')->user())
            $modelType=Doctor::where('id',Auth::user()->id)->First();
        elseif(Auth::guard('pharmacist')->user()){
            $modelType=Pharmacist::where('id',Auth::user()->id)->First();
        
        }
            
        elseif(Auth::guard('radiologist')->user()){
            $modelType=Radiologist::where('id',Auth::user()->id)->First();
            // dd($modelType);
        }
            
        elseif(Auth::guard('analytical')->user())
                $modelType=Analytical::where('id',Auth::user()->id)->First();

        // $request->validate( [
        //     'password' => 'required_with:new_password|password|min:8',
        //     'new_password' => 'required|min:8',
        // ]);
        
        $modelType->update([
            'password'=>Hash::make($request['new_password'])
            ]);
            
            $data=['email'=>Auth::user()->email,'name'=>Auth::user()->fname,'type'=>class_basename($modelType), 'url'=>$modelType->getTable()];
                    event(new SecurityEmail($data));
            return redirect()->route('patient');
        
        
       //    if (==Auth::user()->passwod)
    
        // $decrypted = Crypt::decryptString($encryptedValue);
        // dd((Auth::user()->password));
    
        
        // dd(Hash::make($request['password']) );

        // return redirect()->route('landingPage');
        // if (Auth::guard('doctor')->user())

    }
}
