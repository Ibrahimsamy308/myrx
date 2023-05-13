<?php
namespace App\Http\Controllers;

use App\Models\Examination;
use App\Models\Patient;
use App\Models\OtcDrug;
use App\Models\LabRadiology;
use Illuminate\Http\Request;
use App\Models\Meds;
use Illuminate\Support\Facades\Mail;
use App\Mail\MedicalUpdates;
use App\Mail\NewPatient;
class ExaminationController extends Controller
{
    public function index(Request $request){
        
        $patients=Patient::latest()->paginate(100);
        $examinations=Examination::latest()->paginate(100);
        $otcdrugs=OtcDrug::latest()->paginate(100);
        $labradiologys=LabRadiology::latest()->paginate(100);
        $meds=Meds::All();
        $national_id=$request->input('national_id');
        $flag=1;
        foreach($patients as $patient)
            if($patient->phone==$request->input('national_id'))
            return view('prescription', compact('examinations','otcdrugs','labradiologys','patient','meds','national_id','flag'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return redirect()->route('Doctor.Review')->with('fail', 'Patient has not registered brfore');
    }

    public function create(Request $request){
        $patients=Patient::latest()->paginate(100);
        $examinations=Examination::latest()->paginate(100);
        $meds=Meds::All();
        $patient_id=$request->input('patient_id');
        foreach( $patients as $patient)
            if($patient->id== $patient_id)
        return view('inputprescription', compact('patient','meds'));
    }

    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required'
        // ]);
        //  dd($request->all());
        $patients=Patient::latest()->paginate(100);
        $examinations=Examination::latest()->paginate(100);
        $national_id=$request->input('national_id');
        foreach($patients as $patient)
            if($patient->phone==$request->input('national_id')){
                $patient_id=$patient->id;
                $otcDrug=implode("+",$request['otcDrug']);
                $Dose=implode("+",$request['Dose']);
                Examination::create([
                    'patient_id' => $patient_id,
                    'doctor_id' => $request['doctor_id'],
                    'drugPrescription' => $request['drugPrescription'],
                    'otcDrug' => $otcDrug,
                    'Dose' => $Dose,
                ]);
                if ($patient->email!=""){
                    $data=['name'=>$patient->fname, 'type'=>'Patient','url'=>'patient','ar-Type'=>'المريض'];
                    Mail::To($patient->email)->send(new MedicalUpdates($data));
                }
                // else
                // $data=['name'=>$patient->fname, 'type'=>'Patient','url'=>'patient','ar-Type'=>'المريض', 'd.name'=>'Kirolos'];
                // Mail::To($patient->email)->send(new NewPatient($data));

                return redirect()->route('examinations.index', compact('national_id'))->with('success', 'updated successfully');
            }
            Patient::create([
                'phone' => $request['national_id'],
                'fname' => $request['name'],
            ]);
            $patients=Patient::latest()->paginate(100);
        foreach($patients as $patient)
            if($patient->phone==$request->input('national_id')){
                $patient_id=$patient->id;
                $otcDrug=implode("+",$request['otcDrug']);
                $Dose=implode("+",$request['Dose']);
                Examination::create([
                    'patient_id' => $patient_id,
                    'doctor_id' => $request['doctor_id'],
                    'drugPrescription' => $request['drugPrescription'],
                    'otcDrug' => $otcDrug,
                    'Dose' => $Dose,
                ]);
                // $data=['name'=>$patient->fname, 'type'=>'Patient','url'=>'patient','ar-Type'=>'المريض'];
                // Mail::To($patient->email)->send(new MedicalUpdates($data));
                return redirect()->route('examinations.index', compact('national_id'))->with('success', 'updated successfully');
            }
        // foreach($patients as $patient)
        // if($patient->national_id==$request->input('national_id')){
        //     $patient_id=$patient->id;
        //     $otcDrug=implode("+",$request['otcDrug']);
        //     $Dose=implode("+",$request['Dose']);
        //     Examination::create([
        //         'patient_id' => $patient_id,
        //         'doctor_id' => $request['doctor_id'],
        //         'drugPrescription' => $request['drugPrescription'],
        //         'otcDrug' => $otcDrug,
        //         'Dose' => $Dose,
        //     ]);
        // $data=['name'=>$patient->fname, 'type'=>'Patient','url'=>'patient','ar-Type'=>'المريض'];
        // Mail::To($patient->email)->send(new MedicalUpdates($data));
        // return redirect()->route('examinations.store', compact('doctor_id'))->with('success', 'updated successfully');
    }

    public function show(Examination $examination)
    {
        $patient=$examination->patient;
        $otcdrugs=OtcDrug::latest()->paginate(100);
        $labradiologys=LabRadiology::latest()->paginate(100);
        $otcDrugs = explode("+", $examination->otcDrug);
        $Doses = explode("+", $examination->Dose);
        return view('showprescription',compact('examination','patient','otcdrugs','labradiologys','otcDrugs','Doses'));
    }

    public function edit(Examination $examination)
    {
        $patient=$examination->patient;
        return view('inputprescription', compact('examination','patient'));
    }

    public function update( Request $request, Examination $examination )
    {
      $patients=Patient::latest()->paginate(100);
      $examinations=Examination::latest()->paginate(100);
      $national_id=$examination->patient->phone;
      $examination->update($request->all());
      return redirect()->route('examinations.index', compact('national_id',))->with('success', 'updated successfully');
    }
    public function destroy(Examination $examination){}



}





