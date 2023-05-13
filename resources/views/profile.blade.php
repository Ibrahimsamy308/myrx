<!DOCTYPE html>
<html lang="en-us">
  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Favicons -->
    <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
    <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">

   

    <link id="mainstyle" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link id="mainstyle" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link id="mainstyle" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   
    

    <link id="mainstyle" rel="stylesheet" href="{{asset('FlexStart/assets/css/profile.css')}}">
   

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '507858597277871');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=507858597277871&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->
  
  </head>

  <body >
    {{-- @if (Auth::guard('patient'))
    dddd
    @endif --}}
    <div class="container rounded bg-white mt-5 mb-5">
        <form action="{{route('profileUpdate')}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                @if (Auth::user()->jobTitle==null)
                    {{-- <div class="col-md-4 border-right">
                        <div class="col-md-12">
                            <img class="rounded-circle mt-5" width="150px" src="{{asset('public/materials/').'/'.Auth::user()->document}}">
                            <label  class="labels">Upload your new photo</label>
                            <input type="file" class="form-control-file" name="file" id="exampleInputFile">
                            </div>
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><span class="font-weight-bold">{{Auth::user()->fname}} {{Auth::user()->lname}}</span><span class="font-weight-bold">{{Auth::user()->national_id}} </span> <span  class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
                    </div> --}}
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" width="150px" src="{{asset('materials/').'/'.Auth::user()->document}}">
                            <span class="font-weight-soft">Change photo </span>
                            <input type="file" class="form-control-file" name="file" id="exampleInputFile"  style="margin:0px 0px 18px 60px;">
                                            
                            <span class="font-weight-bold">{{Auth::user()->fname}} {{Auth::user()->lname}}</span>
                            <span class="font-weight-bold">{{Auth::user()->national_id}}</span> 
                            <span  class="text-black-50">{{Auth::user()->email}}</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name='fname' placeholder="first name" value="{{Auth::user()->fname}}"></div>
                                <div class="col-md-6"><label class="labels">Second Name</label><input type="text" class="form-control" name='lname' value="{{Auth::user()->lname}}" placeholder="Second Name"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Enter Your email" value="{{Auth::user()->email}}" disabled></div>
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name='phone' placeholder="Enter phone number" value="{{Auth::user()->phone}}"></div>
                                <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name='address' placeholder="Enter your Address" value="{{Auth::user()->address}}"></div>


                            </div>
                            {{-- <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Current Password</label><input type="password" name="password" class="form-control" value=""></div>
                                <div class="col-md-6"><label class="labels">New Password</label><input type="password" name="newPassword" class="form-control" value="" ></div>
                            </div> --}}
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                        </div>
                    </div>
                @endif
               
                {{-- if he is not a patient --}}
               @if (Auth::user()->jobTitle!=null)
                    {{-- <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" width="150px" src="{{asset('public/materials/').'/'.Auth::user()->document}}">
                            <label  class="labels">Upload your new photo</label>
                            <input type="file" class="form-control-file" name="file" id="exampleInputFile">
                            
                           
                            </div>
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><span class="font-weight-bold">{{  Auth::user()->fname }} {{Auth::user()->lname}}</span><span class="font-weight-bold">{{Auth::user()->national_id}}</span> <span  class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
                    </div> --}}
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" width="150px" src="{{asset('materials/').'/'.Auth::user()->document}}">
                            <span class="font-weight-soft">Change photo </span>
                            <input type="file" class="form-control-file" name="file" id="exampleInputFile"  style="margin:0px 0px 18px 60px;">
                                            
                            <span class="font-weight-bold">{{Auth::user()->fname}} {{Auth::user()->lname}}</span>
                            <span class="font-weight-bold">{{Auth::user()->national_id}}</span> 
                            <span  class="text-black-50">{{Auth::user()->email}}</span>
                        </div>
                        
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name='fname' placeholder="first name" value="{{Auth::user()->fname}}"></div>
                                <div class="col-md-6"><label class="labels">Second Name</label><input type="text" class="form-control" name='lname' value="{{Auth::user()->lname}}" placeholder="Second Name"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Enter Your email" value="{{Auth::user()->email}}" disabled></div>
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name='phone' placeholder="Enter phone number" value="{{Auth::user()->phone}}"></div>
                                <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name='address' placeholder="Enter your Address" value="{{Auth::user()->address}}"></div>


                            </div>
                            {{-- <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Current Password</label><input type="password" name="password" class="form-control" value=""></div>
                                <div class="col-md-6"><label class="labels">New Password</label><input type="password" name="newPassword" class="form-control" value="" ></div>
                            </div> --}}
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                        </div>
                    </div>
                   <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience"><span>Edit Job Title</span></div><br>
                            <div class="col-md-12"><label class="labels">Job Title </label><textarea  class="form-control" name="jobTitle" rows="5" placeholder="Description about your job title">{{Auth::user()->jobTitle}}</textarea></div> <br>
                            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                            {{-- <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> --}}
                        </div>
                    </div>
               @endif
                
                
            </div>
        </form>
        
      </div>
  
  </body>
</html>
