<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Events\ResetEmail;
use App\Events\SecurityEmail;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Pharmacist;
use App\Models\Radiologist;
use App\Models\Analytical;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use App\Models\Examination;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:patient')->except('logout');
        $this->middleware('guest:doctor')->except('logout');
        $this->middleware('guest:pharmacist')->except('logout');
        $this->middleware('guest:radiologist')->except('logout');
        $this->middleware('guest:analytical')->except('logout');
    }

    public function showPatientLoginForm(){
        return view('loginFiles.login', ['url' => 'patient']);
    }

    public function patientLogin(Request $request){
        
        // dd($request->password);
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:patient',
            'password' => 'min:8'
        ]);
        if (Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    // $data=['email'=>$request->email,'name'=>'','type'=>'Patient', 'url'=>'patient'];
                    
                    // event(new ResetEmail($data));
                    // event(new SecurityEmail($data));
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );
                  
                    return redirect()->intended('patient');
                } 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    //doctor
    public function showDoctorLoginForm(){
        return view('loginFiles.login', ['url' => 'doctor']);
    }
    public function doctorLogin(Request $request){
        
        // dd($request->password);
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:doctor',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    $examinations=Examination::latest()->paginate(100);
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );
                //    return redirect()->route('Prescription',compact('examinations'));
                } 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    //pharmacist
    public function showPharmacistLoginForm(){
        return view('loginFiles.login', ['url' => 'pharmacist']);
    }
    public function pharmacistLogin(Request $request){
        
        // dd($request->password);
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:pharmacist',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('pharmacist')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );
                    return redirect()->intended('pharmacist');
                } 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    // radiologist
    public function showRadiologistLoginForm(){
        return view('loginFiles.login', ['url' => 'radiologist']);
    }
    public function radiologistLogin(Request $request){
        
        // dd($request->password);
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:radiologist',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('radiologist')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );
                    // dd(Auth::guard('radiologist')->user());
                    return redirect()->intended('radiologist');
                } 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    // analytical
    public function showAnalyticalLoginForm(){
        return view('loginFiles.login', ['url' => 'analytical']);
    }
    public function AnalyticalLogin(Request $request){
        
        // dd($request->password);
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:analytical',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('analytical')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );
                    // dd(Auth::guard('radiologist')->user());
                    return redirect()->intended('analytical');
                } 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
