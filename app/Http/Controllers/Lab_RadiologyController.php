<?php

namespace App\Http\Controllers;

use App\Models\LabRadiology;
use App\Models\Patient;
use App\Models\Examination;
use Illuminate\Support\Facades\Mail;
use App\Mail\MedicalUpdates;
use Illuminate\Http\Request;

class Lab_RadiologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patients=Patient::latest()->paginate(100);
        $examinations=Examination::latest()->paginate(100);
        $labradiologys=LabRadiology::latest()->paginate(100);
        $examination_id=$request->input('examination_id');


        foreach( $examinations as  $examination)
        if($examination->id== $examination_id)
        $patient=$examination->patient;
        
    

            // dd($labradiologys);
            return view('showAnalysis&Scans',compact('labradiologys','examination_id','patient'));}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patients=Patient::latest()->paginate(100);
        $examinations=Examination::latest()->paginate(100);
        $patient_id=$request->input('patient_id');
        foreach( $patients as  $patient)
        if($patient->id== $patient_id)
        return view('inputprescription', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request){
       
        $file=$request->file('file');
        $name=$file->getClientOriginalName();
        $file->move('public/materials',$name);
        // LabRadiology::create($request->all());

        if($request->input('type')!='Examination')

            LabRadiology::create([ 
                'radiologist_id' => $request->input('radiologist_id'),
                'analytical_id' => $request->input('analytical_id'),
                'patient_id' => $request->input('patient_id'),
                'type' => $request->input('type'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'document' => $name
            ]);

        else
            Examination::create([ 
                'patient_id' => $request->input('patient_id'),
                'document' => $name,
                'drugPrescription' => $request->input('description')
            ]);
        $patient_id=$request->input('patient_id');
        $patients=Patient::latest()->paginate(100);

        foreach($patients as $patient)
        if($patient->id==$request->input('patient_id')){
            $national_id=$patient->national_id;

            $data=['name'=>$patient->fname, 'type'=>'Patient','url'=>'patient','ar-Type'=>'المريض'];
            Mail::To($patient->email)->send(new MedicalUpdates($data));
            return redirect()->route('examinations.index', compact('national_id'))
            ->with('success', 'updated successfully'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LabRadiology  $labRadiology
     * @return \Illuminate\Http\Response
     */
    public function show(LabRadiology $labRadiology)
    {
        $labradiologys=LabRadiology::latest()->paginate(100);
         return view('showAnalysis&Scans',compact('labRadiology'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LabRadiology  $labRadiology
     * @return \Illuminate\Http\Response
     */
    public function edit(LabRadiology $labRadiology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LabRadiology  $labRadiology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LabRadiology $labRadiology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LabRadiology  $labRadiology
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabRadiology $labRadiology)
    {
        //
    }

    public function download(Request $request) {




       $pathToFile ='materials/' . $request->input("document");
      


    return response()->download($pathToFile);
    
   
    }

    public function shows(Request $request) {


// dd($request->input("document"));

//         $pathToFile ='materials/' . $request->input("document");
$patients=Patient::latest()->paginate(100);
$labRadiologys=LabRadiology::latest()->paginate(100);
$examinations=Examination::latest()->paginate(100);

 foreach($patients as $patient)
if($patient->id==$request->input('patient_id'))
foreach($labRadiologys as $labRadiology)
if($labRadiology->id==$request->input('document_id'))
return view('showAnalysis&Scans',compact('labRadiology','patient'));

foreach($examinations as $examination)
if($examination->id==$request->input('document_id'))
return view('showExaminations',compact('examination','patient'));

 }

 
}