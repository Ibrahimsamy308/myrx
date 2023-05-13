<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Pharmacist;
use App\Models\Radiologist;
use App\Models\Analytical;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Events\RegistrationEmail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest');
        $this->middleware('guest:patient');
        $this->middleware('guest:doctor');
        $this->middleware('guest:pharmacist');
        $this->middleware('guest:radiologist');
        $this->middleware('guest:analytical');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    
    public function showPatientRegisterForm(){
        return view('loginFiles.patientRegister', ['url' => 'patient']);
    }
    protected function createPatient(Request $request){
        
        $request->validate( [
            'national_id' => ['required', 'string', 'max:14', 'unique:patient'],
            'fname' => ['required', 'string', 'min:3'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:patient'],
            'dob' => ['required', 'string', 'date'],
            'address'=>['required', 'string', 'min:3'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required', 'string', 'max:11','unique:patient'],
            'gender'=>['required', 'string', 'min:3'],
            'chronic_disases'=>['required', 'string', 'min:1'],
            // 'file'=>['required'],
        ]);
        

        if($request->file('file')){    
            $file=$request->file('file');
            $name=$file->getClientOriginalName();
            $file->move('public/materials',$name);
            
            $patient = Patient::create([    
                'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'dob' => $request['dob'],
                'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                'chronicDisases' => $request['chronic_disases'],
                'document' => $name
            ]);
        }else
            $patient = Patient::create([
                'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'dob' => $request['dob'],
                'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                'chronicDisases' => $request['chronic_disases']
            ]);
            $data=['email'=>$request->email,'type'=>'Patient','url'=>'patient','name'=>$request->fname];
            event(new RegistrationEmail($data));
            return redirect()->intended('login/patient');
    }

    public function showDoctorRegisterForm(){
        return view('loginFiles.doctorRegister', ['url' => 'doctor']);
    }
    protected function createDoctor(Request $request){
        // dd($request->all());
        $request->validate( [
            // 'national_id' => ['required', 'string', 'max:14','unique:doctor'],
            'fname' => ['required', 'string', 'min:3'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:doctor'],
            // 'dob' => ['required', 'string', 'date'],
            // 'address'=>['required', 'string', 'min:3'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required', 'string', 'max:11','unique:doctor'],
            'specialization'=>['required'],
            // 'jobTitle'=>['required'],
            'gender'=>['required', 'string', 'min:3'],
            // 'clinc_name'=>['required', 'string', 'min:1'],
            // 'clinc_address'=>['required', 'string', 'min:1'],
            // 'clinc_phone'=>['required', 'string', 'max:11'],
            // 'working_time'=>['required', 'string', 'min:1'],
            // 'file'=>['required'],
        ]);

        

        if($request->file('file')){
            $file=$request->file('file');
            $name=$file->getClientOriginalName();
            $file->move('public/materials',$name);
            $doctor = Doctor::create([
                // 'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                // 'dob' => $request['dob'],
                // 'address' => $request['address'],
                'specialization'=>$request['specialization'],
                // 'jobTitle'=>$request['jobTitle'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                // 'clinc_name' => $request['clinc_name'],
                // 'clinc_address' => $request['clinc_address'],
                // 'clinc_phone' => $request['clinc_phone'],
                // 'working_time' => $request['working_time'],
                // 'document' => $name
            ]);
        }else

            $doctor = Doctor::create([
                // 'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                // 'dob' => $request['dob'],
                // 'address' => $request['address'],
                'specialization'=>$request['specialization'],
                // 'jobTitle'=>$request['jobTitle'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                // 'clinc_name' => $request['clinc_name'],
                // 'clinc_address' => $request['clinc_address'],
                // 'clinc_phone' => $request['clinc_phone'],
                // 'working_time' => $request['working_time']
            ]);
            $data=['email'=>$request->email,'type'=>'Doctor','url'=>'doctor','name'=>$request->fname];
            event(new RegistrationEmail($data));
            return redirect()->intended('login/doctor');
    }

    public function showPharmacistRegisterForm(){
        return view('loginFiles.pharmacistRegister', ['url' => 'pharmacist']);
    }
    protected function createPharmacist(Request $request){
        $request->validate( [
            // 'national_id' => ['required', 'string', 'max:14','unique:pharmacist'],
            'fname' => ['required', 'string', 'min:3'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:pharmacist'],
            // 'dob' => ['required', 'string', 'date'],
            // 'address'=>['required', 'string', 'min:3'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required', 'string', 'max:11','unique:pharmacist'],
            'gender'=>['required', 'string', 'min:3'],
            // 'pharmacy_name'=>['required', 'string', 'min:1'],
            // 'pharmacy_address'=>['required', 'string', 'min:1'],
            // 'pharmacy_phone'=>['required', 'string', 'max:11'],
            // 'working_time'=>['required', 'string', 'min:1'],
            // 'file'=>['required'],
        ]);



        if($request->file('file')){
            $file=$request->file('file');
            $name=$file->getClientOriginalName();
            $file->move('public/materials',$name);
            $pharmacist = Pharmacist::create([
                // 'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                // 'dob' => $request['dob'],
                // 'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                // 'pharmacy_name' => $request['pharmacy_name'],
                // 'pharmacy_address' => $request['pharmacy_address'],
                // 'pharmacy_phone' => $request['pharmacy_phone'],
                // 'working_time' => $request['working_time'],
                // 'document' => $name
            ]);
        }else
            $pharmacist = Pharmacist::create([
                // 'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                // 'dob' => $request['dob'],
                // 'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                // 'pharmacy_name' => $request['pharmacy_name'],
                // 'pharmacy_address' => $request['pharmacy_address'],
                // 'pharmacy_phone' => $request['pharmacy_phone'],
                // 'working_time' => $request['working_time']
            ]);
            $data=['email'=>$request->email,'type'=>'Pharmacist','url'=>'pharmacist','name'=>$request->fname];
            event(new RegistrationEmail($data));
            return redirect()->intended('login/pharmacist');
    }   

    // radiologist
    public function showRadiologistRegisterForm(){
        return view('loginFiles.radiologistRegister', ['url' => 'radiologist']);
    }
    protected function createRadiologist(Request $request){
        $request->validate( [
            'national_id' => ['required', 'string', 'max:14' ,'unique:radiologist'],
            'fname' => ['required', 'string', 'min:3'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:radiologist'],
            'dob' => ['required', 'string', 'date'],
            'address'=>['required', 'string', 'min:3'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required', 'string', 'max:11','unique:radiologist'],
            'gender'=>['required', 'string', 'min:3'],
            'lab_name'=>['required', 'string', 'min:1'],
            'lab_address'=>['required', 'string', 'min:1'],
            'lab_phone'=>['required', 'string', 'max:11'],
            'working_time'=>['required', 'string', 'min:1'],
            // 'file'=>['required'],
        ]);


       
        // $file=$request->file('file');
        // $name=$file->getClientOriginalName();
        // $file->move('materials',$name);
        if($request->file('file')){        
            $file=$request->file('file');
            $name=$file->getClientOriginalName();
            $file->move('public/materials',$name);
            $radiologist = Radiologist::create([
                'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'dob' => $request['dob'],
                'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                'pharmacy_name' => $request['lab_name'],
                'pharmacy_address' => $request['lab_address'],
                'pharmacy_phone' => $request['lab_phone'],
                'working_time' => $request['working_time'],
                'document' => $name
            ]);
        }else
            $radiologist = Radiologist::create([
                'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'dob' => $request['dob'],
                'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                'pharmacy_name' => $request['lab_name'],
                'pharmacy_address' => $request['lab_address'],
                'pharmacy_phone' => $request['lab_phone'],
                'working_time' => $request['working_time']
            ]);
            $data=['email'=>$request->email,'type'=>'Radiologist','url'=>'radiologist','name'=>$request->fname];
            event(new RegistrationEmail($data));
            return redirect()->intended('login/radiologist');
    }   
    // analytical
    public function showAnalyticalRegisterForm(){
        return view('loginFiles.radiologistRegister', ['url' => 'analytical']);
    }
    protected function createAnalytical(Request $request){
        $request->validate( [
            'national_id' => ['required', 'string', 'max:14', 'unique:analytical'],
            'fname' => ['required', 'string', 'min:3'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:analytical'],
            'dob' => ['required', 'string', 'date'],
            'address'=>['required', 'string', 'min:3'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required', 'string', 'max:11', 'unique:analytical'],
            'gender'=>['required', 'string', 'min:3'],
            'lab_name'=>['required', 'string', 'min:1'],
            'lab_address'=>['required', 'string', 'min:1'],
            'lab_phone'=>['required', 'string', 'max:11'],
            'working_time'=>['required', 'string', 'min:1'],
            // 'file'=>['required'],
        ]);

        // $file=$request->file('file');
        // $name=$file->getClientOriginalName();
        // $file->move('materials',$name);



        if($request->file('file')){        
            $file=$request->file('file');
            $name=$file->getClientOriginalName();
            $file->move('public/materials',$name);
            $analytical = Analytical::create([
                'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'dob' => $request['dob'],
                'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                'pharmacy_name' => $request['lab_name'],
                'pharmacy_address' => $request['lab_address'],
                'pharmacy_phone' => $request['lab_phone'],
                'working_time' => $request['working_time'],
                'document' => $name
            ]);
        }else
            $analytical = Analytical::create([
                'national_id' => $request['national_id'],
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'dob' => $request['dob'],
                'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'gender' => $request['gender'],
                'pharmacy_name' => $request['lab_name'],
                'pharmacy_address' => $request['lab_address'],
                'pharmacy_phone' => $request['lab_phone'],
                'working_time' => $request['working_time']
            ]);
            $data=['email'=>$request->email,'type'=>'Analytical','url'=>'analytical','name'=>$request->fname];
            event(new RegistrationEmail($data));
            return redirect()->intended('login/analytical');
    }   

}
