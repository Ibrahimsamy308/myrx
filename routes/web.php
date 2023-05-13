<?php





use Illuminate\Support\Facades\Route;
use App\Models\Patient;
use App\Models\Examination;
use App\Models\OtcDrug;
use App\Models\LabRadiology;
use App\Models\Meds;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', function () {
    return view('loginFiles.login');
});
//----------------------------------------------
// Route::get('/pre', function () {
//     return view('prescription');
// });

//---------------------------------------------------

Route::get('/new', function () {
    return view('NewTrial');
});



Route::get('/register', function () {
    return view('loginFiles.register');
});

Route::get('/forgetPass', function () {
    return view('loginFiles.forgetPass');
})->name('forgetPass');

Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/home', function () {
    return view('landingPage');
})->name('landingPage');

Route::group(['middleware' => 'auth:patient,doctor,pharmacist,radiologist,analytical'],function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name("profile");
    Route::put('/profileUpdate', [App\Http\Controllers\ProfileController::class, 'update'])->name('profileUpdate');
    Route::put('/changePass', [App\Http\Controllers\ProfileController::class, 'change'])->name('changePass');
    Route::get('/DoctorReview', function () {
        $examinations=Examination::latest()->paginate(100);
        return view('DoctorReview',compact('examinations'));
    })->name("Doctor.Review");
    Route::resource('examinations', ExaminationController::class);
    Route::resource('otcdrugs', OtcdrugController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('lab&radiology', Lab_RadiologyController::class);
    Route::get('/download', [App\Http\Controllers\Lab_RadiologyController::class, 'download'])->name('download.document');
    Route::get('/shows', [App\Http\Controllers\Lab_RadiologyController::class, 'shows'])->name('shows.document');
    Route::get('/changePass', function () {
        return view('loginFiles.changePass');
    })->name("changePass");
    Route::get('/resetPass', function () {
        return view('loginFiles.resetPassword');
    })->name("resetPass");


});
//------------------------------------------------------
// Route::get('/patientPrescription', function () {

//     return view('patient_prescription');
// });
// Route::get('/Prescription', function () {

//     return view('prescription');
// });

//------------------------------------------------------
Route::get('/patientPrescription', function () {

    return view('patient_prescription');
});

Route::get('/pharmacistPrescription', function () {

    return view('pharmacist_prescription');
});
Route::group(['middleware' => 'auth:patient'],function () {
    Route::get('/patient', function () {
        $patients=Patient::latest()->paginate(100);
        $examinations=Examination::latest()->paginate(100);
        $otcdrugs=OtcDrug::latest()->paginate(100);
        $labradiologys=LabRadiology::latest()->paginate(100);
        $flag=0;
        foreach($patients as $patient)
            if($patient->national_id==Auth::user()->national_id)
            return view('prescription', compact('examinations','patient','otcdrugs','labradiologys','flag'))->with('i', (request()->input('page', 1) - 1) * 5);
            // return redirect()->route('Doctor.Review')->with('fail', 'Patient has not registered brfore');
    })->name('patient');
});

Route::group(['middleware' => 'auth:doctor'],function () {
    Route::get('/doctor', function () {
        $examinations=Examination::latest()->paginate(100);
        $meds=Meds::All();
        $flag=0;
        return view('prescription',compact('examinations','flag','meds'));
    })->name('doctor');
});

Route::group(['middleware' => 'auth:pharmacist'],function () {
    Route::get('/pharmacist', function () {
        $examinations=Examination::latest()->paginate(100);
         $flag=0;
        return view('prescription',compact('examinations','flag'));
    })->name('pharmacist');
});

Route::group(['middleware' => 'auth:radiologist'],function () {
    Route::get('/radiologist', function () {
        $examinations=Examination::latest()->paginate(100);
        return view('DoctorReview',compact('examinations'));
    })->name('radiologist');
});

Route::group(['middleware' => 'auth:analytical'],function () {
    Route::get('/analytical', function () {
        $examinations=Examination::latest()->paginate(100);
        return view('DoctorReview',compact('examinations'));
    })->name('analytical');
});

Route::get('notAutherized', function () {
    return view('notAutherized');
})->name('notAutherized');

Route::get('/Prescription', function () {
    return view('prescription');
})->name("Prescription");

Route::get('/inputPrescription', function () {
    return view('inputprescription');
})->name("input.Prescription");

Route::get('/showPrescription', function () {
    return view('showprescription');
})->name("show.Prescription");


//patient
Route::get('/register/patient', [App\Http\Controllers\Auth\RegisterController::class ,'showPatientRegisterForm'])->name("register/patient");
Route::post('/register/patient', [App\Http\Controllers\Auth\RegisterController::class ,'createPatient']);
Route::get('/login/patient', [App\Http\Controllers\Auth\LoginController::class,'showPatientLoginForm'])->name("login/patient");
Route::post('/login/patient', [App\Http\Controllers\Auth\LoginController::class,'patientLogin']);
//by kirolos
Route::post('/patient-password/email', [App\Http\Controllers\Patient\ForgotPasswordController::class,'sendResetLinkEmail'])->name("patient.password.email");
Route::get('/patient-password/reset', [App\Http\Controllers\Patient\ForgotPasswordController::class,'showLinkRequestForm'])->name("patient.password.update");
Route::post('/patient-password/reset', [App\Http\Controllers\Patient\ResetPasswordController::class,'reset']);
Route::get('/patient-password/reset/{token}', [App\Http\Controllers\Patient\ResetPasswordController::class,'showResetForm'])->name("patient.password.reset");

// Doctor
Route::get('/register/doctor', [App\Http\Controllers\Auth\RegisterController::class,'showDoctorRegisterForm'])->name("register/doctor");
Route::post('/register/doctor', [App\Http\Controllers\Auth\RegisterController::class,'createDoctor']);
Route::get('/login/doctor', [App\Http\Controllers\Auth\LoginController::class,'showDoctorLoginForm'])->name("login/doctor");
Route::post('/login/doctor', [App\Http\Controllers\Auth\LoginController::class,'doctorLogin']);
//edited by kirolos
Route::post('/doctor-password/email', [App\Http\Controllers\Doctor\ForgotPasswordController::class,'sendResetLinkEmail'])->name("doctor.password.email");
Route::get('/doctor-password/reset', [App\Http\Controllers\Doctor\ForgotPasswordController::class,'showLinkRequestForm'])->name("doctor.password.update");
Route::post('/doctor-password/reset', [App\Http\Controllers\Doctor\ResetPasswordController::class,'reset']);
Route::get('/doctor-password/reset/{token}', [App\Http\Controllers\Doctor\ResetPasswordController::class,'showResetForm'])->name("doctor.password.reset");
// Route::post('/doctor-forget-password', [App\Http\Controllers\Doctor\ForgotPasswordController::class,'doctorLogin']);

//Pharmacist
Route::get('/register/pharmacist', [App\Http\Controllers\Auth\RegisterController::class,'showPharmacistRegisterForm'])->name("register/pharmacist");
Route::post('/register/pharmacist', [App\Http\Controllers\Auth\RegisterController::class,'createPharmacist']);
Route::get('/login/pharmacist', [App\Http\Controllers\Auth\LoginController::class,'showPharmacistLoginForm'])->name("login/pharmacist");
Route::post('/login/pharmacist', [App\Http\Controllers\Auth\LoginController::class,'pharmacistLogin']);
//by kirolos
Route::post('/pharmacist-password/email', [App\Http\Controllers\Pharmacist\ForgotPasswordController::class,'sendResetLinkEmail'])->name("pharmacist.password.email");
Route::get('/pharmacist-password/reset', [App\Http\Controllers\Pharmacist\ForgotPasswordController::class,'showLinkRequestForm'])->name("pharmacist.password.update");
Route::post('/pharmacist-password/reset', [App\Http\Controllers\Pharmacist\ResetPasswordController::class,'reset']);
Route::get('/pharmacist-password/reset/{token}', [App\Http\Controllers\Pharmacist\ResetPasswordController::class,'showResetForm'])->name("pharmacist.password.reset");

//Radiologist
Route::get('/register/radiologist', [App\Http\Controllers\Auth\RegisterController::class,'showRadiologistRegisterForm'])->name("register/radiologist");
Route::post('/register/radiologist', [App\Http\Controllers\Auth\RegisterController::class,'createRadiologist']);
Route::get('/login/radiologist', [App\Http\Controllers\Auth\LoginController::class,'showRadiologistLoginForm'])->name("login/radiologist");
Route::post('/login/radiologist', [App\Http\Controllers\Auth\LoginController::class,'radiologistLogin']);
//by kirolos
Route::post('/radiologist-password/email', [App\Http\Controllers\Radiologist\ForgotPasswordController::class,'sendResetLinkEmail'])->name("radiologist.password.email");
Route::get('/radiologist-password/reset', [App\Http\Controllers\Radiologist\ForgotPasswordController::class,'showLinkRequestForm'])->name("radiologist.password.update");
Route::post('/radiologist-password/reset', [App\Http\Controllers\Radiologist\ResetPasswordController::class,'reset']);
Route::get('/radiologist-password/reset/{token}', [App\Http\Controllers\Radiologist\ResetPasswordController::class,'showResetForm'])->name("radiologist.password.reset");

// analytical
Route::get('/register/analytical', [App\Http\Controllers\Auth\RegisterController::class,'showAnalyticalRegisterForm'])->name("register/analytical");
Route::post('/register/analytical', [App\Http\Controllers\Auth\RegisterController::class,'createAnalytical']);
Route::get('/login/analytical', [App\Http\Controllers\Auth\LoginController::class,'showAnalyticalLoginForm'])->name("login/analytical");
Route::post('/login/analytical', [App\Http\Controllers\Auth\LoginController::class,'analyticalLogin']);
//by kirolos
Route::post('/analytical-password/email', [App\Http\Controllers\Analytical\ForgotPasswordController::class,'sendResetLinkEmail'])->name("analytical.password.email");
Route::get('/analytical-password/reset', [App\Http\Controllers\Analytical\ForgotPasswordController::class,'showLinkRequestForm'])->name("analytical.password.update");
Route::post('/analytical-password/reset', [App\Http\Controllers\Analytical\ResetPasswordController::class,'reset']);
Route::get('/analytical-password/reset/{token}', [App\Http\Controllers\Analytical\ResetPasswordController::class,'showResetForm'])->name("analytical.password.reset");

Route::post('/ContactUs', [App\Http\Controllers\HelpController::class,'contactUs'])->name("contact.myrx");
