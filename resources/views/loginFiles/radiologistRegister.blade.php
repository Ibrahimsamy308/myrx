<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @if($url=='analytical')
        <title>Analytical Registration</title>
    @else
        <title>Radiologist Registration</title>
    @endif
  <!-- Favicons -->
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="{{asset('customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container" style="margin-top: -102px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    
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
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="national_id" type="text" class="form-control form-control-user @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" placeholder="National ID" required>
                                        @error('national_id')
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


                                <div class="form-group row">
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
                                </div> 
                                    
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        {{-- <input id="gender" type="text" class="form-control form-control-user @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" placeholder="Gender" required autocomplete="gender" autofocus> --}}
                                        <select class="form-select form-select-user @error('gender') is-invalid @enderror" name="gender" aria-label="Default select example" style="WIDTH: inherit;height: 38px;border: 1px solid lightgray;border-radius: 5px;color: rgb(58, 57, 57);outline: none;padding: inherit;">
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
                                        <input type="file" class="@error('file') is-invalid @enderror" name="file" id="exampleInputFile">
                                            @error('file')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="phone" type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" required autocomplete="phone" autofocus>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <hr>     
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
                                        <input id="lab_name" type="text" class="form-control form-control-user @error('lab_name') is-invalid @enderror" name="lab_name" value="{{ old('lab_name') }}" placeholder="Lab Name" required autocomplete="lab_name" autofocus>
                                            @error('lab_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="lab_address" type="text" class="form-control form-control-user @error('lab_address') is-invalid @enderror" name="lab_address" value="{{ old('lab_address') }}" placeholder="Lab Address" required autocomplete="lab_address" autofocus>
                                            @error('lab_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="lab_phone" type="lab_phone" class="form-control form-control-user @error('lab_phone') is-invalid @enderror" name="lab_phone" value="{{ old('lab_phone') }}" placeholder="Lab Phone" required autocomplete="lab_phone" autofocus>
                                            @error('lab_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div> 
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
                                <a class="small" href="{{route('landingPage')}}">I am not a {{$url}}</a>
                                {{-- <a class="small" href=""> I am not ***</a> --}}
                                {{-- <a class="small" href="{{route('registerAs')}}"> I am not ***</a> --}}
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{asset('forgetPass')}}">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                @if ($url=='radiologist')
                                    <a class="small" href="{{route('login/radiologist')}}">Already have an account? Login!</a>
                                @else
                                    <a class="small" href="{{route('login/analytical')}}">Already have an account? Login!</a>
                                @endif
                                
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





{{-- 
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input id="" type="text" class="form-control form-control-user @error('') is-invalid @enderror" name="" value="{{ old('') }}" placeholder="" required autocomplete="" autofocus>
            @error('')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input id="" type="" class="form-control form-control-user @error('') is-invalid @enderror" name="" value="{{ old('') }}" placeholder="" required autocomplete="" autofocus>
            @error('')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
</div> --}}