<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\HelpEmail;

class HelpController extends Controller
{
    
    public function contactUs(Request $request){
        // $emails= Student::pluck('email')->toArray();
        // dd($request->all());
        // dd($request->input('email'));
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            // 'password' => 'required'
        ]);
        // dd($request->input('email'));

        $data=['name'=>$request->input('name'),'email'=>$request->input('email'),'subject'=>$request->input('subject'),'message'=>$request->input('message')];
        Mail::To("ahmedgad@myrx-eg.com", "kirolos.khamis@myrx-eg.com")->cc($request->input('email'))->send(new HelpEmail($data));
        // foreach($emails as $email){           
        //     Mail::To($email)->send(new NotifyEmail($data));
        // }
        // return redirect()->back()->with('IT WORKS!');
         return redirect()->intended('/#contact')->with('success', 'Thanks for contacting me, I will get back to you soon!');
        
    }




    
}
