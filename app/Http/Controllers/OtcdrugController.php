<?php

namespace App\Http\Controllers;

use App\Models\OtcDrug;
use App\Models\Examination;
use App\Models\Patient;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MedicalUpdates;

class OtcdrugController extends Controller
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
        $otcdrugs=OtcDrug::latest()->paginate(100);
        $examination_id=$request->input('examination_id');

        foreach( $examinations as  $examination)
        if($examination->id== $examination_id)
        $patient=$examination->patient;

        return view('showOtcdrugs',compact('otcdrugs','examination_id','patient'));


    }

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
        foreach( $patients as $patient)
        if($patient->id== $patient_id)
        return view('inputprescription', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        OtcDrug::create($request->all());
        $patients=Patient::latest()->paginate(100);
        $patient_id=$request->input('patient_id');


       foreach($patients as $patient)
       if($patient->id==$request->input('patient_id'))
       {
            $national_id=$patient->national_id;
            
            $data=['name'=>$patient->fname, 'type'=>'Patient','url'=>'patient','ar-Type'=>'المريض'];
            Mail::To($patient->email)->send(new MedicalUpdates($data));
            
            return redirect()->route('examinations.index', compact('national_id'))
            ->with('success', 'updated successfully'); }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\OtcDrug  $otcDrug
     * @return \Illuminate\Http\Response
     */
    public function show(OtcDrug $otcDrug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OtcDrug  $otcDrug
     * @return \Illuminate\Http\Response
     */
    public function edit(OtcDrug $otcDrug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OtcDrug  $otcDrug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtcDrug $otcDrug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OtcDrug  $otcDrug
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtcDrug $otcDrug)
    {
        //
    }
}
