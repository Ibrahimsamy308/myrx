<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Form</title>
  <!-- Favicons -->
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    
    <link href="{{asset('customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="bg-gradient-primary">

    <div class="container" style="margin-top: -59px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            @isset($url)
                            {{-- <div>{{ $url }}</div> --}}
                            <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                            @else
                            {{-- <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data"> --}}
                            <form method="POST" action="" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                            @endisset
                            {{-- <form method="POST" class="user" action="{{ route('register') }}"> --}}
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="fname" type="text" class="form-control form-control-user @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" placeholder="First Name" required autocomplete="fname" autofocus>
                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="lname" type="text" class="form-control form-control-user @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" placeholder="Last Name" required autocomplete="lname" autofocus>
                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="national_id" type="text" class="form-control form-control-user @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" placeholder="National ID" required>
                                        @error('national_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="phone" type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" required autocomplete="phone" autofocus>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>


                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="password" type="password" placeholder="Password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password" class="form-control form-control-user" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>


                                {{-- <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="address" type="text" class="form-control form-control-user @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address" required autocomplete="address" autofocus>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="dob" type="date" class="form-control form-control-user @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" placeholder="Date of Birth" required autocomplete="dob" autofocus>
                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>  --}}
                                    
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        {{-- <input id="gender" type="text" class="form-control form-control-user @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" placeholder="Gender" required autocomplete="gender" autofocus> --}}
                                        <select class="form-control form-control-user @error('gender') is-invalid @enderror" name="gender" aria-label="Default select example">
                                            <option value=""selected disabled>Your Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="form-control form-control-user @error('specialization') is-invalid @enderror" name="specialization" aria-label="Default select example">
                                            <option selected>Choose Your Specialization</option>
                                            <option value="Chest and Respiratory">Chest and Respiratory</option>
                                            <option value="Dermatology Skin">Dermatology Skin</option>
                                            <option value="Dentistry Teeth">Dentistry Teeth</option>
                                            <option value="Psychiatry Mental">Psychiatry Mental</option>
                                            <option value="Psychiatry Emotional">Psychiatry Emotional</option>
                                            <option value="Psychiatry Behavioral">Psychiatry Behavioral</option>
                                            <option value="Psychiatry Disorders">Psychiatry Disorders</option>
                                            <option value="Pediatrics and New Born Child">Pediatrics and New Born Child</option>
                                            <option value="Neurology Brain & Nerves">Neurology Brain & Nerves</option>
                                            <option value="Orthopedics Bones">Orthopedics Bones</option>
                                            <option value="Gynaecology and Infertility">Gynaecology and Infertility</option>
                                            <option value="Ear, Nose and Throat">Ear, Nose and Throat</option>
                                            <option value="Cardiology and Vascular Disease Heart">Cardiology and Vascular Disease Heart</option>
                                            <option value="Ophthalmology Eyes">Ophthalmology Eyes</option>
                                            <option value="Urology Urinary System">Urology Urinary System</option>
                                            <option value="Physiotherapy">Physiotherapy</option>
                                            <option value="Cardiology Surgery">Cardiology Surgery</option>
                                            <option value="Thoracic Surgery">Thoracic Surgery</option>
                                            <option value="Allergy and Immunology- Sensitivity and Immunity">Allergy and Immunology- Sensitivity and Immunity</option>
                                            <option value="Andrology and Male Infertility">Andrology and Male Infertility</option>
                                            <option value="Audiology">Audiology</option>
                                            <option value="Diabetes and Endocrinology">Diabetes and Endocrinology</option>
                                            <option value="Dietitian and Nutrition">Dietitian and Nutrition</option>
                                            <option value="Family Medicine">Family Medicine</option>
                                            <option value="Gastroenterology and Endoscopy">Gastroenterology and Endoscopy</option>
                                            <option value="General Practice">General Practice</option>
                                            <option value="General Surgery">General Surgery</option>
                                            <option value="Geriatrics Old People Health">Geriatrics- Old People Health</option>
                                            <option value="Hematology">Hematology</option>
                                            <option value="Hepatology- Liver Doctor">Hepatology- Liver Doctor</option>
                                            <option value="Internal Medicine">Internal Medicine</option>
                                            <option value="IVF and Infertility">IVF and Infertility</option>
                                            <option value="Nephrology">Nephrology</option>
                                            <option value="Neurosurgery Brain">Neurosurgery Brain</option>
                                            <option value="Neurosurgery Nerves Surgery">Neurosurgery Nerves Surgery</option>
                                            <option value="Oncology- Tumor">Oncology- Tumor</option>
                                            <option value="Oncology Surgery- Tumor Surgery">Oncology Surgery- Tumor Surgery</option>
                                            <option value="Osteopathy- Osteopathic Medicine">Osteopathy- Osteopathic Medicine</option>
                                            <option value="Pain Management">Pain Management</option>
                                            <option value="Pediatric Surgery">Pediatric Surgery</option>
                                            <option value="Phoniatrics- Speech">Phoniatrics- Speech</option>
                                            <option value="Physiotherapy and Sport Injuries">Physiotherapy and Sport Injuries</option>
                                            <option value="Plastic Surgery">Plastic Surgery</option>
                                            <option value="Rheumatology">Rheumatology</option>
                                            <option value="Spinal Surgery">Spinal Surgery</option>
                                            <option value="Vascular Surgery- Arteries and Vein Surgery">Vascular Surgery- Arteries and Vein Surgery</option>
                                        </select>
                                        @error('specialization')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="phone" type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" required autocomplete="phone" autofocus>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div> --}}
                                    {{-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="jobTitle" type="text" class="form-control form-control-user @error('jobTitle') is-invalid @enderror" name="jobTitle" value="{{ old('jobTitle') }}" placeholder="Description about your job title" required autocomplete="jobTitle" autofocus>
                                            @error('jobTitle')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div> --}}
                                </div>
                                {{-- <div class="form-group row">
                                    <div class="col-sm-12  mb-6 mb-sm-0">
                                        <input type="file" class="form-control form-control-user @error('file') is-invalid @enderror" name="file" id="exampleInputFile" >
                                            @error('file')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    
                                </div> --}}
                                {{-- <hr>     
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="working_time" type="text" class="form-control form-control-user @error('working_time') is-invalid @enderror" name="working_time" value="{{ old('working_time') }}" placeholder="Working Time" required autocomplete="working_time" autofocus>
                                            @error('working_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="clinc_name" type="text" class="form-control form-control-user @error('clinc_name') is-invalid @enderror" name="clinc_name" value="{{ old('clinc_name') }}" placeholder="Clinc Name" required autocomplete="clinc_name" autofocus>
                                            @error('clinc_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="clinc_address" type="text" class="form-control form-control-user @error('clinc_address') is-invalid @enderror" name="clinc_address" value="{{ old('clinc_address') }}" placeholder="Clinc Address" required autocomplete="clinc_address" autofocus>
                                            @error('clinc_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="clinc_phone" type="clinc_phone" class="form-control form-control-user @error('clinc_phone') is-invalid @enderror" name="clinc_phone" value="{{ old('clinc_phone') }}" placeholder="Clinc phone" required autocomplete="clinc_phone" autofocus>
                                            @error('clinc_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>  --}}

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register Account') }}
                                </button>
                                {{-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                            </form>
                            <hr>
                            <div class="text-center">
                                <a style="font-size:15px" href="{{route('landingPage')}}">I am not a {{$url}}</a>
                                {{-- <a class="small" href=""> I am not ***</a> --}}
                                {{-- <a class="small" href="{{route('registerAs')}}"> I am not ***</a> --}}
                            </div>
                            <div class="text-center">
                                <a style="font-size:15px" href="{{asset('forgetPass')}}">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                {{-- <a class="small" href="{{route('login/student')}}">Already have an account? Login!</a> --}}
                                <a style="font-size:15px" href="{{route('login/doctor')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('customeAuth/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('customeAuth/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('customeAuth/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('customeAuth/js/sb-admin-2.min.js')}}"></script>

</body>

</html>