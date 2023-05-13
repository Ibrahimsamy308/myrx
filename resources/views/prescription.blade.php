
  @extends('Master_prescription')
  @section('body')
    <body class="orchid">
        <!-- Modal for show prescription -->
        @if($flag!=0 ||  Auth::guard('patient')->user())
          @foreach ($examinations as $examination)
            @if (( !Auth::guard('patient')->user() && $patient->phone==$national_id) || (Auth::guard('patient')->user() && $examination->patient_id==Auth::guard('patient')->user()->id) )
              @if ($examination->doctor_id!=null)
                <div class="modal fade" id="exampleModalCenter2{{$examination->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: block;">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6  id="exampleModalLongTitle" style="margin: 13px 0 0 14px;">Examination
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -10px;">
                            <i style="font-size: 30px;margin: 10px;" aria-hidden="true">&times;</i>
                          </button>
                        </h6>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="container" >
                            <div style="background: linear-gradient(to top right, #ffffff 0%, #ffffff 100%);">
                              <div class="wrapper wrapper--w680">
                                <span style="float: right;"><span style="font-weight: bold" ></span> </span>
                                <br>
                                <span style="float: right;"><span style="font-weight: bold" ></span>{{$examination->doctor->specialization}}</span>
                                <span style="float: left;"><span style="font-weight: bold" ></span></span>
                                <br><hr style="border-top:1px solid rgba(6, 20, 19, .1)">
                                <span style="float: left; font-weight: bold;margin: 7px 0 7px 0;">Diagnosis</span>
                                <form action="" method="post">
                                  @csrf
                                  <div class="form-group">
                                    <textarea class="form-control" disabled name="drugPrescription" style="background-color: #eeeeee;" id="prescription" rows="4">{{$examination->drugPrescription}}</textarea>
                                  </div>
                                  <?php
                                    $otcDrugs = explode("+", $examination->otcDrug);
                                    $Doses = explode("+", $examination->Dose);
                                  ?>
                                  @for ($i = 0; $i < count($otcDrugs) && $i < count($Doses); $i++)
                                    <div class='row' style='margin:0px 0px 0px -12px;width: 112%;'>
                                      <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                                        <p style='margin: 15px 0 0px 0;font-size: revert; font-weight: bold;'>Rx:</p>
                                      </div>
                                      <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                                        <p style='margin: 15px 0 0px 0;'>{{$otcDrugs[$i]}}</p>
                                      </div>
                                    </div>
                                    <div class='row' style='margin:-5px 0px 0px -12px;width: 112%;'>
                                      <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                                        <p style='margin: 3px 0 0px 0;font-size: revert; font-weight: bold;'>Dose:</p>
                                      </div>
                                      <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                                        <p style='margin: 3px 0 0px 0;'>{{$Doses[$i]}}</p>
                                      </div>
                                    </div>
                                  @endfor
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="modal-footer">
                        <div class="p-t-15">
                          <span style="float: left;"><span style="font-weight: bold" >Address: </span>Cairo, Egypt  </span>
                          <span style="float: right;"> <span style="font-weight: bold" > Phone:</span> 01273985841</span>
                          {{-- <button class="btn btn--radius-2 btn--blue" type="Cancel">Cancel</button> --}}
                        </div><br>
                        @if (Auth::guard('patient')->user())
                          <div class="p-t-15" style="margin: 16px 0px 0 0;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="width: -webkit-fill-available;">Write a Review</button>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endif
          @endforeach
        @endif
        
        
        
         @if( !Auth::guard('patient')->user())
            <div class="mainmenu-block" style="background: linear-gradient(to top, #162232, #3A60AD);">
              <form action="{{ route('examinations.index') }}" method="GET">
              @csrf
        
              <div class="menu-block-label" style="margin: 16px 0 0 15px;">
                <label for="nationalid" style="margin: 0 3px;font-size: small;">Phone Number</label>
                <input type="nationalid" class="form-control" id="nationalid" name="national_id"  placeholder="Phone Number" style="border-radius: 0.35rem; padding: 5px; width: 93%;background-color: rgb(236, 233, 233);">
                <button type="submit" class="btn btn-primary btn-lg" style="width: 93%;height: 40px;margin: 20px 0px; font-size: 16px">Search</button>
              </div>
         @endif                         
        @if($flag!=0 ||  Auth::guard('patient')->user())
          @if (Auth::guard('doctor')->user() || Auth::guard('patient')->user() || Auth::guard('pharmacist')->user() )
          <form action="{{route('patients.update', $patient)}}" method="post">
          @csrf
          @method('PUT')
          @endif
          <div class="mainmenu-block" style="background: linear-gradient(to top, #162232, #3A60AD);">
            <nav class="menu-block">
              <ul class="nav">
                @if (Auth::guard('patient')->user())
                  <li class="nav-item mainmenu-user-profile"><a href="{{route('profile')}}">
                @else
                  <li class="nav-item mainmenu-user-profile">
                @endif
                <div class="circle-box">
                  {{-- <img src="{{asset('public/FlexStart/prescriptionassets/images/face/1.jpg')}}" alt=""> --}}
                  <img src="{{asset('public/materials/').'/'.$patient->document}}" alt="">
                  <div class="dot dot-success"></div>
                </div>
                <div class="menu-block-label"><b>{{$patient->fname}} {{$patient->lname}}</b><br>-</div></a></li>
              </ul>
              <div class="menu-block-label" style="line-height: 2;margin: 10px 0 7px 0px;">
                <span>Phone Number: {{ $patient->phone}}</span>
                <br>
                <span>Age: {{now()->year-date('Y', strtotime($patient->dob))}} Y</span>
              </div>
              
              <div class="menu-block-label">
                @foreach ($examinations as $examination)
                  @if ((Auth::guard('doctor')->user() && $examination->doctor_id==Auth::guard('doctor')->user()->id && $examination->patient->phone==$national_id)||(Auth::guard('patient')->user() && $examination->patient_id==$patient->id)|| (isset($national_id) &&$patient->phone==$national_id))
                  @if($examination->doctor_id!=null)
                    <button type="button" class="btn btn-primary btn-lg" style="margin-bottom: 2%; width:158px" data-toggle="modal" data-target="#exampleModalCenter2{{$examination->id}}" >
                      <p>{{$examination->doctor->specialization}}</p>
                      <p> Dr. {{$examination->doctor->fname}} {{$examination->doctor->lname}}</p>
                      <p>{{date('d F Y', strtotime($examination->created_at))}} </p>
                    </button>
                    @else
                                        <button type="button" class="btn btn-primary btn-lg" style="margin-bottom: 2%; width:158px" data-toggle="modal" data-target="#exampleModalCenter2{{$examination->id}}" >
                      <p>Uploaded by patient</p>
                      <p>{{date('d F Y', strtotime($examination->created_at))}} </p>
                    </button>
                  @endif
                  @endif
                @endforeach
                
                
              </div>
            </nav>
          </div>
          </form>
          </div>
        @else
          @if($flag!=0)
            <form action="{{route('patients.update', $patient)}}" method="post">
              @csrf
              @method('PUT')
              <div class="mainmenu-block">
              <nav class="menu-block">
              <ul class="nav">
                @if (Auth::guard('patient')->user())
                  <li class="nav-item mainmenu-user-profile"><a href="{{route('profile')}}">
                @else
                  <li class="nav-item mainmenu-user-profile">
                @endif
                    <div class="circle-box">
                      {{-- <img src="{{asset('public/FlexStart/prescriptionassets/images/face/1.jpg')}}" alt=""> --}}
                      <img src="{{asset('public/materials/').'/'.$patient->document}}" alt="">
                      <div class="dot dot-success"></div>
                    </div>
                    <div class="menu-block-label"><b>{{$patient->fname}} {{$patient->lname}}</b><br>-</div></a></li>
              </ul>
              <div class="menu-block-label" style="line-height: 2;margin: 10px 0 7px 0px;">
                <span>Phone Number: {{ $patient->phone}}</span>
                <br>
                <span>Age: {{now()->year-date('Y', strtotime($patient->dob))}} Y</span>
              </div>
              <ul class="nav" style="margin:0px 0px; overflow-x:hidden">
                <li class="nav-item" >
                  <div class='row'>
                    <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                        <label for="">Height</label>
                        <input type="height" disabled name="height" value="{{old('height', $patient->height)}}" class="form-control" style=" color: rgb(138, 132, 132); margin: -12px 0;width: 97%;"  aria-describedby="height" placeholder="Height">
                        <input type="hidden" name="flag" value="{{'outerPatientedit'}}">
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <div class='row'>
                    <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                        <label for="">Weight</label>
                        <input type="weight" disabled name="weghit" value="{{old('weghit', $patient->weghit)}}" class="form-control" style=" color: rgb(138, 132, 132);margin: -12px 0;width: 97%;"  aria-describedby="weight" placeholder="Weight">
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <div class='row'>
                    <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                        <label for="">Blood Type</label>
                        <select  disabled name="bloodType"  class="form-control"  style=" color: rgb(138, 132, 132); margin: -12px 0; width: 97%; " aria-label="bloodType">
                          <option selected>{{$patient->bloodType}}</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                        </select>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                    <div class='row'>
                      <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                          <label for="">Allergy From</label>
                          <textarea class="form-control" disabled name="glucoseLevel" style="background-color: #eeeeee; width: 97%; margin: -12px 0;" id="glucoseLevel" rows="1">{{$patient->glucoseLevel}}</textarea>
                      </div>
                  </div>
                </li>
                <li class="nav-item">
                  <div class='row'>
                    <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                        <label for="">Chronic Disases</label>
                        <textarea class="form-control"disabled name="chronicDisases" style="background-color: #eeeeee; width: 97%; margin: -12px 0;"id="chronicDisases" rows="1">{{$patient->chronicDisases}}</textarea>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <div class='row'>
                    <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                        <label for="">Vaccination</label>
                        <textarea class="form-control" disabled name="vaccination" value="{{old('vaccination', $patient->vaccination)}}" aria-describedby="vaccination"  style="background-color: #eeeeee; width: 97%; margin: -12px 0 0 0;"id="vaccination" rows="1">{{$patient->vaccination}}</textarea>
                    </div>
                  </div>
                </li>
                <input type="hidden" name="patient_id" value="{{$patient->id}}">
                <li class="nav-item">
                  <div class='row'>
                    <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                      <button type="submit" class="btn btn-primary btn-lg" style="width: 97%;height: 35px;margin: 20px 0px; font-size: 14px">Save</button>
                    </div>
                  </div>
                </li>
              </ul>
              </nav>
              </div>
            </form>
          @endif
        @endif

        <div class="main-wrapper">
          <div class="view-wrapper">
            <div class="topbar-wrapper">
              <div class="topbar-wrapper-mobile-nav"><a class="topbar-togger js-minibar-toggler" href="#"><i class="icon ion-ios-arrow-back hidden-md-down"></i><i class="icon ion-navicon-round hidden-lg-up"></i></a>
                <a class="topbar-togger pull-xs-right hidden-lg-up js-nav-toggler" href="#">
                  <i class="icon ion-android-person"></i>
                </a>
                <a class="topbar-wrapper-logo demo-logo" href="#">My Rx</a>
              </div>
              <ul class="nav navbar-nav topbar-wrapper-nav">
                @if (Auth::guard('patient')->user())
                <li class="nav-link nav-item dropdown">
                  <a class="btn btn-primary"  href="{{route('lab&radiology.create',['patient_id'=>$patient->id])}}" role="button"> Upload previous medical files</a>
                </li>

                @endif

                <li class="nav-item dropdown" >
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <div class="circle-box">
                      <img src="{{asset('public/materials/').'/'.Auth::user()->document}}" style="width:32px" alt="">
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-menu-inner">
                      <a class="dropdown-item media circle-box" href="{{route('profile')}}">
                        <div class="media-body">
                          <div class="media-heading">Profile</div>
                        </div>
                      </a>
                      <a class="dropdown-item media circle-box" href="{{route('changePass')}}">
                        <div class="media-body">
                          <div class="media-heading">Change Password</div>
                        </div>
                      </a>
                      <a class="dropdown-item media circle-box" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <div class="media-body">
                          <div class="media-heading">Logout<i class="icon ion-android-exit"></i></div>
                        </div>
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>


                    </div>
                  </div>
                </li>
                <li class="nav-item"><a class="nav-link close-mobile-nav js-close-mobile-nav" href="#"><i class="icon ion-close"></i></a></li>
              </ul>
            </div>
            {{-- enter prescription --}}
            @if ($flag!=0 && Auth::guard('doctor')->user())
              <div class="container-fluid" >
                <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background: linear-gradient(to top right, #ffffff 0%, #ffffff 100%);">
                  <div class="wrapper wrapper--w680">
                    <div class="card card-4" style="margin: -94px 0 0 0">
                      <div class="card-body">
                        {{-- <h2 class="title">Write your Examination</h2> --}}
                        <span style="float: right;"><span style="font-weight: bold" >Dr. {{Auth::guard('doctor')->user()->fname}} {{Auth::guard('doctor')->user()->lname}}</span> </span>
                        <br>
                        <span style="float: right;"><span style="font-weight: bold" >{{Auth::guard('doctor')->user()->jobTitle}}</span></span>
                        <span style="float: left;"><span style="font-weight: bold;" >{{Auth::guard('doctor')->user()->specialization}}</span></span>

                        <br><hr style="border-top:2px solid rgba(6, 20, 19, .1)">
                        <span style="float: left; font-weight: bold;margin: 7px 0 25px 0;">Diagnosis</span>
                        {{-- <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input id="fname" type="text" class="form-control form-control-user @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" placeholder="First Name" required autocomplete="fname" autofocus>
                                  @error('fname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input id="phone" type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autocomplete="phone" autofocus>
                                  @error('phone')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                        </div> --}}
                        <form action="{{route('examinations.store',['patient_id'=>$patient->id,'doctor_id'=>Auth::guard('doctor')->user()->id])}}" method="post">
                          @csrf
                        <span style="float: right;"><input  type= "text" class='form-control'  name="national_id" value="{{$patient->phone}}" placeholder='Patient Phone'></span>
                        <span style="float: right;"><input type= "text" class='form-control' name="name" value="{{$patient->fname}} {{$patient->lname}}" placeholder='Patient Name'></span>

                            <div class="form-group">
                              <textarea class="form-control" name="drugPrescription" style="background-color: #eeeeee; width: 100%;" id="prescription" rows="4" ></textarea>
                              <div style="float: right;margin: 0 -2px -13px 0;">
                                <button type="button" onClick="addRow(this)"><i class='fa fa-plus' style="color: blue;font-size:20px"></i></button>
                                <button  type="button" onClick="removeRow(this)"><i class='fa fa-remove' style="color: red;font-size:20px"></i></button>
                              </div>
                              <div id="id">
                              <div class='textboxDiv'>
                                <div class='row' style='0 0 0 -12px;width: 105%;'>
                                  <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                                    <p style='margin: 20px 0 0px 0;font-weight: bold;'>Rx:</p>
                                  </div>
                                  <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                                    <input class='form-control' list='datalistOptions' name='otcDrug[]' id='exampleDataList' style='margin: 18px 0 0px 0;' placeholder='Type a med...'>
                                  </div>
                                </div>
                                <div class='row' style='0 0 0 -12px;width: 105%;'>
                                  <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                                    <p style='margin: 15px 0 0px 0;font-size: revert; font-weight: bold;'>Dose:</p>
                                  </div>
                                  <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                                    <input type='text' class='form-control' name='Dose[]' style='margin: 10px 0 0px 0;' placeholder='type a dose..'>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <script>
                                  // var txtbox = "Rx <input class='form-control' name='drugPrescription' id='prescription'  style='margin-bottom: 14px;' list='datalistOptions' id='exampleDataList' placeholder='Type a med...'><br>Dose <input type='text'>";
                                  var txtbox = "<div class='textboxDiv'> <div class='row' style='0 0 0 -12px;width: 105%;'><div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'><p style='margin: 20px 0 0px 0;font-weight: bold;'>Rx:</p></div><div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'><input class='form-control' list='datalistOptions' id='exampleDataList' name='otcDrug[]' style='margin: 18px 0 0px 0;' placeholder='Type a med...'></div></div><div class='row' style='0 0 0 -12px;width: 105%;'><div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'><p style='margin: 15px 0 0px 0;font-size: revert;font-weight: bold;'>Dose:</p></div><div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'><input type='text' class='form-control' name='Dose[]' style='margin: 10px 0 0px 0;' placeholder='Type a dose..'></div></div></div>";
                                  function addRow(btn) {
                                      $("#id").append(txtbox);
                                  }
                                  function removeRow(btn) {
                                      $("#id").children().slice(-1).remove();
                                  }
                              </script>
                              <datalist id="datalistOptions">
                                @foreach ($meds as $med)
                                  <option value="{{$med->medName}}">
                                @endforeach
                              </datalist>
                            </div>
                            <div class="p-t-15">
                              <button class="btn btn--radius-2 btn--blue" style="background-color:red;" type="reset">Cancel</button>
                              <button class="btn btn--radius-2 btn--blue" style="float: right;" type="submit">Submit</button>
                            </div>
                            <div class="p-t-15">
                              <span style="float: left;"><span style="font-weight: bold" >Address: </span> {{Auth::guard('doctor')->user()->address}} </span>
                              <span style="float: right;"> <span style="font-weight: bold" > Phone:</span>  {{Auth::guard('doctor')->user()->phone}}</span>
                              {{-- <button class="btn btn--radius-2 btn--blue" type="Cancel">Cancel</button> --}}
                            </div>
                            {{-- <div class="p-t-15">
                              <button class="btn btn--radius-2 btn--blue" type="Cancel">Cancel</button>
                            </div> --}}
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @elseif(Auth::guard('doctor')->user())
              <div class="container-fluid" >
                <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background: linear-gradient(to top right, #ffffff 0%, #ffffff 100%);">
                  <div class="wrapper wrapper--w680">
                    <div class="card card-4" style="margin: -85px 0 0 0">
                      <div class="card-body">
                        {{-- <h2 class="title">Write your Examination</h2> --}}
                        <span style="float: right;"><span style="font-weight: bold" >Dr. {{Auth::guard('doctor')->user()->fname}} {{Auth::guard('doctor')->user()->lname}}</span> </span>
                        <br>
                        <span style="float: right;"><span style="font-weight: bold" >{{Auth::guard('doctor')->user()->jobTitle}}</span></span>
                        <span style="float: left;"><span style="font-weight: bold;" >{{Auth::guard('doctor')->user()->specialization}}</span></span>
                        <br><hr style="border-top:2px solid rgba(6, 20, 19, .1)">

                        <form action="{{route('examinations.store',['doctor_id'=>Auth::guard('doctor')->user()->id])}}" method="post">
                          @csrf
                        <span style="float: left; font-weight: bold;margin: 7px 0 7px 0;">Diagnosis</span>
                        <span style="float: right;"><input  type= "text" class='form-control'  name='national_id' placeholder='Patient Phone'></span>
                        <span style="float: right;"><input type= "text" class='form-control' name="name" placeholder='Patient Name'></span>
                            <div class="form-group">
                              <textarea class="form-control" name="drugPrescription" style="background-color: #eeeeee; width: 100%;" id="prescription" rows="4" ></textarea>
                              <div style="float: right;margin: 0 -2px -13px 0;">
                                <button type="button" onClick="addRow(this)"><i class='fa fa-plus' style="color: blue;font-size:20px"></i></button>
                                <button  type="button" onClick="removeRow(this)"><i class='fa fa-remove' style="color: red;font-size:20px"></i></button>
                              </div>
                              <div id="id">
                              <div class='textboxDiv'>
                                <div class='row' style='0 0 0 -12px;width: 105%;'>
                                  <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                                    <p style='margin: 20px 0 0px 0;font-weight: bold;'>Rx:</p>
                                  </div>
                                  <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                                    <input class='form-control' list='datalistOptions' name='otcDrug[]' id='exampleDataList' style='margin: 18px 0 0px 0;' placeholder='Type a med...'>
                                  </div>
                                </div>
                                <div class='row' style='0 0 0 -12px;width: 105%;'>
                                  <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                                    <p style='margin: 15px 0 0px 0;font-size: revert; font-weight: bold;'>Dose:</p>
                                  </div>
                                  <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                                    <input type='text' class='form-control' name='Dose[]' style='margin: 10px 0 0px 0;' placeholder='type a dose..'>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <script>
                                  // var txtbox = "Rx <input class='form-control' name='drugPrescription' id='prescription'  style='margin-bottom: 14px;' list='datalistOptions' id='exampleDataList' placeholder='Type a med...'><br>Dose <input type='text'>";
                                  var txtbox = "<div class='textboxDiv'> <div class='row' style='0 0 0 -12px;width: 105%;'><div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'><p style='margin: 20px 0 0px 0;font-weight: bold;'>Rx:</p></div><div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'><input class='form-control' list='datalistOptions' id='exampleDataList' name='otcDrug[]' style='margin: 18px 0 0px 0;' placeholder='Type a med...'></div></div><div class='row' style='0 0 0 -12px;width: 105%;'><div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'><p style='margin: 15px 0 0px 0;font-size: revert;font-weight: bold;'>Dose:</p></div><div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'><input type='text' class='form-control' name='Dose[]' style='margin: 10px 0 0px 0;' placeholder='Type a dose..'></div></div></div>";
                                  function addRow(btn) {
                                      $("#id").append(txtbox);
                                  }
                                  function removeRow(btn) {
                                      $("#id").children().slice(-1).remove();
                                  }
                              </script>
                              <datalist id="datalistOptions">
                                @foreach ($meds as $med)
                                  <option value="{{$med->medName}}">
                                @endforeach
                              </datalist>
                            </div>
                            <div class="p-t-15">
                              <button class="btn btn--radius-2 btn--blue" style="background-color:red;" type="reset">Cancel</button></a>
                              <button class="btn btn--radius-2 btn--blue" style="float: right;" type="submit">Submit</button>
                            </div>
                            <div class="p-t-15">
                              <span style="float: left;"><span style="font-weight: bold" >Address/ </span> {{Auth::guard('doctor')->user()->address}} </span>
                              <span style="float: right;"> <span style="font-weight: bold" > Phone/</span>  {{Auth::guard('doctor')->user()->phone}}</span>
                              {{-- <button class="btn btn--radius-2 btn--blue" type="Cancel">Cancel</button> --}}
                            </div>
                            {{-- <div class="p-t-15">
                              <button class="btn btn--radius-2 btn--blue" type="Cancel">Cancel</button>
                            </div> --}}
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          </div>
        </div>

    </body>
  @endsection



