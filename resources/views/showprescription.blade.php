<!DOCTYPE html>

<html lang="en-us">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prescription</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Favicons -->
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">
    {{-- for input prescription --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('FlexStart/inputprescriptionassets/css/main.css')}}" rel="stylesheet" media="all">
    <!-- Theme-->
    <!-- Concat all lib & plugins css-->
    <link id="mainstyle" rel="stylesheet" href="{{asset('FlexStart/inputprescriptionassets/stylesheets/theme-libs-plugins.css')}}">
    <link id="mainstyle" rel="stylesheet" href="{{asset('FlexStart/inputprescriptionassets/stylesheets/skin.css')}}">
    <link id="mainstyle" rel="stylesheet" href="{{asset('FlexStart/inputprescriptionassets/bootstrap/css/bootstrap.css')}}">

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
  <body class="orchid">
    <!-- #SIDEMENU-->
    {{-- <form action="{{route('patients.update',$patient)}}" method="post">
      @csrf
      @method('PUT')
     <div class="mainmenu-block">
     <!-- SITE MAINMENU-->
     <nav class="menu-block">
       <ul class="nav">
        <li class="nav-item mainmenu-user-profile"><a href="user-profile.html">
            <div class="circle-box"><img src="{{asset('public/FlexStart/prescriptionassets/images/face/1.jpg')}}" alt="">
              <div class="dot dot-success"></div>
            </div>
            <div class="menu-block-label"><b>Odalys Broussard</b><br>Managing Director</div></a></li>
      </ul>
      <div class="p-a-2">
        <!-- <span class="small pull-xs-right">This Month Earnings</span> -->
        <span>National ID:{{ $patient->national_id}}</span>
        <br><br>
        <span>Name: {{ $patient->fname}} {{ $patient->lname}} </span>
      <br><br>
      <span>Age: {{ $patient->age}} </span>
        <!-- <span>Age: </span> -->

        <!-- <canvas id="demo-bar-dark-chart"></canvas> -->

      </div>

    

      <ul class="nav">

          <li class="nav-item">

              <div class="menu-block-label">

              <input type="height" name="height" value="{{old('height', $patient->height)}}" class="form-control" style=" color: rgb(138, 132, 132);"  aria-describedby="height" placeholder="Height">

              <input type="hidden" name="examination" value="{{$examination}}"> 

            </div> 

              

          </li>



          <li class="nav-item">

            <div class="menu-block-label">

            <input type="weight" name="weghit" value="{{old('weghit', $patient->weghit)}}" class="form-control" style=" color: rgb(138, 132, 132);"  aria-describedby="weight" placeholder="Weight"> </div> 

          </li>



          <li class="nav-item">

            <div class="menu-block-label">

            <input type="blood_pressure" name="bloodPresure" value="{{old('bloodPresure', $patient->bloodPresure)}}" class="form-control" style=" color: rgb(138, 132, 132);"  aria-describedby="blood_pressure" placeholder="Blood Pressure"> </div> 

          </li>

        

          <li class="nav-item">

            <div class="menu-block-label">

            <input type="glucose_level" name="glucoseLevel" value="{{old('glucoseLevel', $patient->glucoseLevel)}}" class="form-control" style=" color: rgb(138, 132, 132);"  aria-describedby="glucose_level" placeholder="Glucose Level"> </div> 

          </li>



          <li class="nav-item">

            <div class="menu-block-label">

            <input type="chronic_diseases" name="chronicDisases" value="{{old('chronicDisases', $patient->chronicDisases)}}" class="form-control" style=" color: rgb(138, 132, 132);"  aria-describedby="chronic_diseases" placeholder="Chronic Diseases"> </div> 

          </li>

          

          <li class="nav-item">

            <div class="menu-block-label">

            <input type="vaccination" name="vaccination" value="{{old('vaccination',$patient->vaccination)}}" class="form-control" style=" color: rgb(138, 132, 132);"  aria-describedby="vaccination" placeholder="Vaccination"> </div> 

          </li>



          <input type="hidden" name="patient_id" value="{{$patient->id}}">



          <li class="nav-item">

            <div class="menu-block-label">

              <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 30%;">s</button>

          </li>

            

        </ul>

        <!-- </li> -->

   

      

       

      <!-- END SITE MAINMENU-->

      </nav>

      </div>

    </form> --}}



    @if (Auth::guard('doctor')->user() || Auth::guard('patient')->user() || Auth::guard('pharmacist')->user() )

              <form action="{{route('patients.update', $patient)}}" method="post">
                @csrf
                @method('PUT')
               <div class="mainmenu-block">
               <!-- SITE MAINMENU-->
               <nav class="menu-block">
                 <ul class="nav">
                   @if (Auth::guard('patient')->user())
                    <li class="nav-item mainmenu-user-profile"><a href="{{route('profile')}}">     
                   @else
                    <li class="nav-item mainmenu-user-profile">
                   @endif                  
                      <div class="circle-box">
                        {{-- <img src="{{asset('public/FlexStart/prescriptionassets/images/face/1.jpg')}}" alt=""> --}}
                        <img src="{{asset('materials/').'/'.$patient->document}}" alt="">
                        <div class="dot dot-success"></div>
                      </div>
                      <div class="menu-block-label"><b>{{$patient->fname}} {{$patient->lname}}</b><br>-</div></a></li>
                </ul>

                
                <div class="menu-block-label" style="line-height: 2;margin: 10px 0 7px 0px;">
                  <span>National ID: {{ $patient->national_id}}</span>
                   <br>
                  <span>Age: {{now()->year-date('Y', strtotime($patient->dob))}} Y</span>
                </div>

                <ul class="nav" style="margin:0px 0px; overflow-x:hidden">
                  <li class="nav-item" >
                    <div class='row'>
                      <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                          <label for="">Height</label>
                          <input type="height" name="height" value="{{old('height', $patient->height)}}" class="form-control" style=" color: rgb(138, 132, 132); margin: -12px 0;width: 97%;"  aria-describedby="height" placeholder="Height">
                          <input type="hidden" name="flag" value="{{'outerPatientedit'}}">
                      </div>
                    </div>            
                  </li>
                  <li class="nav-item">
                    <div class='row'>
                      <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                          <label for="">Weight</label>
                          <input type="weight" name="weghit" value="{{old('weghit', $patient->weghit)}}" class="form-control" style=" color: rgb(138, 132, 132);margin: -12px 0;width: 97%;"  aria-describedby="weight" placeholder="Weight"> 
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class='row'>
                      <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                          <label for="">Blood Type</label>
                          <select name="bloodType"  class="form-control"  style=" color: rgb(138, 132, 132); margin: -12px 0; width: 97%; " aria-label="bloodType">
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
                            <textarea class="form-control" name="glucoseLevel" style="background-color: #eeeeee; width: 97%; margin: -12px 0;" id="glucoseLevel" rows="1">{{$patient->glucoseLevel}}</textarea>
                        </div>
                    </div>    
                  </li>
                  <li class="nav-item">
                    <div class='row'>
                      <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                          <label for="">Chronic Disases</label>
                          <textarea class="form-control" name="chronicDisases" style="background-color: #eeeeee; width: 97%; margin: -12px 0;"id="chronicDisases" rows="1">{{$patient->chronicDisases}}</textarea>
                      </div>
                    </div> 
                  </li>
                  <li class="nav-item">
                    <div class='row'>
                      <div class='col-xs-11 col-sm-11 col-md-11 col-lg-11 menu-block-label' style="margin:0 0 17px 14px">
                          <label for="">Vaccination</label>
                          <textarea class="form-control" name="vaccination" value="{{old('vaccination', $patient->vaccination)}}" aria-describedby="vaccination"  style="background-color: #eeeeee; width: 97%; margin: -12px 0 0 0;"id="vaccination" rows="1">{{$patient->vaccination}}</textarea>
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
              @else

            <form action="{{route('patients.update', $patient)}}" method="post">
                @csrf
                @method('PUT')
               <div class="mainmenu-block">
               <!-- SITE MAINMENU-->
               <nav class="menu-block">
                 <ul class="nav">
                   @if (Auth::guard('patient')->user())
                    <li class="nav-item mainmenu-user-profile"><a href="{{route('profile')}}">     
                   @else
                    <li class="nav-item mainmenu-user-profile">
                   @endif                  
                      <div class="circle-box">
                        {{-- <img src="{{asset('public/FlexStart/prescriptionassets/images/face/1.jpg')}}" alt=""> --}}
                        <img src="{{asset('materials/').'/'.$patient->document}}" alt="">
                        <div class="dot dot-success"></div>
                      </div>
                      <div class="menu-block-label"><b>{{$patient->fname}} {{$patient->lname}}</b><br>-</div></a></li>
                </ul>

                <div class="menu-block-label" style="line-height: 2;margin: 10px 0 7px 0px;">
                  <span>National ID: {{ $patient->national_id}}</span>
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
            
                <!-- END SITE MAINMENU-->
                </nav>
                </div>
              </form>
              @endif

    <!-- #MAIN-->

    <div class="main-wrapper">
      <!-- VIEW WRAPPER-->s
      <div class="view-wrapper">



        <!-- TOP WRAPPER-->

        <div class="topbar-wrapper">



          <!-- NAV FOR MOBILE-->

          <div class="topbar-wrapper-mobile-nav"><a class="topbar-togger js-minibar-toggler" href="#"><i class="icon ion-ios-arrow-back hidden-md-down"></i><i class="icon ion-navicon-round hidden-lg-up"></i></a><a class="topbar-togger pull-xs-right hidden-lg-up js-nav-toggler" href="#"><i class="icon ion-android-person"></i></a>



            <!-- ADD YOUR LOGO HEREText logo: a.topbar-wrapper-logo(href="#") AdminHero

            --><a class="topbar-wrapper-logo demo-logo" href="#">My Rx</a>

          </div>

          <!-- END NAV FOR MOBILE-->



          <!-- SEARCH-->

          <div class="topbar-wrapper-search">

            <form>

              <input class="form-control" type="search" placeholder="Search"><a class="topbar-togger topbar-togger-search js-close-search" href="#"><i class="icon ion-close"></i></a>

            </form>

          </div>

          <!-- END SEARCH-->



          <!-- TOP RIGHT MENU-->

          <ul class="nav navbar-nav topbar-wrapper-nav">

            {{-- <li class="nav-item"><a class="nav-link js-search-togger" href="#"><i class="icon ion-ios-search-strong"></i></a></li> --}}



            {{-- <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon fa fa-columns"></i><span class="badge badge-success status">4</span></a>



              <!-- #RIGHT BLOCK-->

              <!--

              RIGHT PANEL

              * same dropdown-menu markup, add '.dropdown-menu-side'

              -->

              <div class="dropdown-menu dropdown-menu-side">

                <ul class="nav nav-tabs nav-justified">

                  <li class="nav-item"><a class="nav-link active" data-target="#demoright-1" aria-controls="demoright-1" role="tab" data-toggle="tab"><i class="ion-help-buoy icon"></i></a></li>

                  <li class="nav-item"><a class="nav-link" data-target="#demoright-2" aria-controls="demoright-2" role="tab" data-toggle="tab"><i class="ion-quote icon"></i></a></li>

                  <li class="nav-item"><a class="nav-link" data-target="#demoright-3" aria-controls="demoright-3" role="tab" data-toggle="tab"><i class="ion-gear-b icon"></i></a></li>

                </ul>

                <div class="tab-content">

                  <div class="tab-pane active fade in" role="tabpanel" id="demoright-1"><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/2.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Ryan Sears</div>

                        <p class="text-muted small">Rome; Hard there to deeply verbal page goals a accept into it pri</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle">

                        <div class="media-object circle-object bg-info"><i class="ion-calendar"></i></div>

                      </div>

                      <div class="media-body">

                        <div class="media-heading">Event remind.</div>

                        <p class="text-muted small">10 min ago</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle">

                        <div class="media-object circle-object bg-success">40%</div>

                      </div>

                      <div class="media-body">

                        <div class="media-heading">Event remind.</div>

                        <div class="progress">

                          <progress class="progress progress-danger loader" value="46" max="100"></progress>

                        </div>

                        <p class="text-muted small">10 min ago</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle">

                        <div class="media-object circle-object bg-danger">2d</div>

                      </div>

                      <div class="media-body">

                        <div class="media-heading">Project deadline.</div>

                        <div class="progress">

                          <progress class="progress progress-success loader" value="80" max="100"></progress>

                        </div>

                        <p class="text-muted small">80% completion</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/1.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/2.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/3.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/4.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="assets/images/face/1.jpg" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/2.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/3.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/4.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/1.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/2.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/3.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/4.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/1.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/2.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/3.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a><a class="dropdown-item media circle-box" href="#">

                      <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/4.jpg')}}" alt=""></div>

                      <div class="media-body">

                        <div class="media-heading">Judith Sullivan</div>

                        <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                      </div></a>

                  </div>

                  <div class="tab-pane p-a-1 fade" role="tabpanel" id="demoright-2"></div>

                  <div class="tab-pane p-a-1 fade" role="tabpanel" id="demoright-3"></div>

                </div>

              </div>

              <!-- END RIGHt PANEL-->

              

            </li> --}}



            {{-- <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon ion-android-notifications-none"></i><span class="badge badge-danger status">9+</span></a>

              <div class="dropdown-menu dropdown-menu-right">

                <div class="dropdown-header">Notifications (5)</div>

                <div class="dropdown-menu-inner"><a class="dropdown-item media circle-box" href="#">

                    <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/2.jpg')}}" alt=""></div>

                    <div class="media-body">

                      <div class="media-heading">Ryan Sears</div>

                      <p class="text-muted small">Pink do well together specially name if design postage briefs big into in her working</p>

                    </div></a><a class="dropdown-item media circle-box" href="#">

                    <div class="media-left media-middle">

                      <div class="media-object circle-object bg-danger"><i class="fa fa-bug"></i></div>

                    </div>

                    <div class="media-body">

                      <div class="media-heading">Server Error</div>

                      <p class="text-muted small">3 minutes ago</p>

                    </div></a><a class="dropdown-item media circle-box" href="#">

                    <div class="media-left media-middle">

                      <div class="media-object circle-object bg-success"><i class="fa fa-check"></i></div>

                    </div>

                    <div class="media-body">

                      <div class="media-heading">Server Error Reports</div>

                      <p class="text-muted small">3 minutes ago</p>

                    </div></a><a class="dropdown-item media circle-box" href="#">

                    <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/1.jpg')}}" alt=""></div>

                    <div class="media-body">

                      <div class="media-heading">Judith Sullivan</div>

                      <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                    </div></a><a class="dropdown-item media circle-box" href="#">

                    <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/2.jpg')}}" alt=""></div>

                    <div class="media-body">

                      <div class="media-heading">Judith Sullivan</div>

                      <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                    </div></a><a class="dropdown-item media circle-box" href="#">

                    <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/3.jpg')}}" alt=""></div>

                    <div class="media-body">

                      <div class="media-heading">Judith Sullivan</div>

                      <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                    </div></a><a class="dropdown-item media circle-box" href="#">

                    <div class="media-left media-middle"><img class="media-object circle-object" src="{{asset('public/FlexStart/inputprescriptionassets/images/face/4.jpg')}}" alt=""></div>

                    <div class="media-body">

                      <div class="media-heading">Judith Sullivan</div>

                      <p class="text-muted small">Option wouldn't small hardly of and more believe The fundamentals</p>

                    </div></a>

                </div><a class="dropdown-item" href="#">

                  <div class="text-xs-center"><i class="ion-more"></i></div></a>

              </div>

            </li> --}}

            <li class="nav-item dropdown">

              <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                <div class="circle-box">

                  <img src="{{asset('materials/').'/'.Auth::user()->document}}" style="width:32px" alt="">

                </div>

              </a>

              <div class="dropdown-menu dropdown-menu-right">

                {{-- <div class="dropdown-header">Notifications (5)</div> --}}

                <div class="dropdown-menu-inner">

                  <a class="dropdown-item media circle-box" href="{{route('profile')}}">

                    

                    <div class="media-body">

                      <div class="media-heading">Profile</div>

                      {{-- <p class="text-muted small">Pink do well together specially name if design postage briefs big into in her working</p> --}}

                    </div>

                  </a> 

                  <a class="dropdown-item media circle-box" href="{{route('changePass')}}">

                    <div class="media-body">

                      <div class="media-heading">Change Password</div>

                    </div>

                  </a>  

                  <a class="dropdown-item media circle-box" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                    <div class="media-body">

                      <div class="media-heading">Logout  <i class="icon ion-android-exit"></i></div>

                    </div>

                  </a>  

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                      @csrf

                  </form>

                </div>

                {{-- <a class="dropdown-item" href="#">

                <div class="text-xs-center"><i class="ion-more"></i></div></a> --}}

              </div>

            </li>

            {{-- <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon ion-paintbucket"></i></a>

              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

                <div class="js-color-switcher demo-color-switcher">

                  <div class="dropdown-header">Flat</div>

                  <div class="list-inline"><a class="list-inline-item" href="#" data-color="f-dark">

                      <div class="demo-skin-grid f-dark"></div></a><a class="list-inline-item" href="#" data-color="f-dark-blue">

                      <div class="demo-skin-grid f-dark-blue"></div></a><a class="list-inline-item" href="#" data-color="f-blue">

                      <div class="demo-skin-grid f-blue"></div></a><a class="list-inline-item" href="#" data-color="f-green">

                      <div class="demo-skin-grid f-green"></div></a><a class="list-inline-item" href="#" data-color="f-deep-taupe">

                      <div class="demo-skin-grid f-deep-taupe"></div></a>

                  </div>

                  <div class="dropdown-header">Gradient</div>

                  <div class="list-inline"><a class="list-inline-item" href="#" data-color="orchid">

                      <div class="demo-skin-grid orchid"></div></a><a class="list-inline-item" href="#" data-color="cadetblue">

                      <div class="demo-skin-grid cadetblue"></div></a><a class="list-inline-item" href="#" data-color="joomla">

                      <div class="demo-skin-grid joomla"></div></a><a class="list-inline-item" href="#" data-color="influenza">

                      <div class="demo-skin-grid influenza"></div></a><a class="list-inline-item" href="#" data-color="moss">

                      <div class="demo-skin-grid moss"></div></a><a class="list-inline-item" href="#" data-color="mirage">

                      <div class="demo-skin-grid mirage"></div></a><a class="list-inline-item" href="#" data-color="stellar">

                      <div class="demo-skin-grid stellar"></div></a><a class="list-inline-item" href="#" data-color="servquick">

                      <div class="demo-skin-grid servquick"></div></a>

                  </div>

                </div>

              </div>

            </li> --}}

            {{-- <li class="nav-item">

              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();

                document.getElementById('logout-form').submit();">

                <i class="icon ion-android-exit"></i>

              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                  @csrf

              </form>

            </li> --}}

            <li class="nav-item"><a class="nav-link close-mobile-nav js-close-mobile-nav" href="#"><i class="icon ion-close"></i></a></li>

            <!-- END TOP RIGHT MENU-->

          </ul>

        </div>

        <!--END TOP WRAPPER-->

 





        <div class="container-fluid" >
          <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background: linear-gradient(to top right, #ffffff 0%, #ffffff 100%);">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                  <div class="card-body">
                    {{-- <h2 class="title">Write your Prescription</h2> --}}
                    <span style="float: right;"><span style="font-weight: bold" >Dr/</span> {{$examination->doctor->fname}} {{$examination->doctor->lname}}</span>
                    <br>
                    <span style="float: right;"><span style="font-weight: bold" ></span>{{$examination->doctor->jobTitle}}</span>
                    <span style="float: left;"><span style="font-weight: bold" ></span>{{$examination->doctor->specialization}}</span>
                    <br>
                    <span style="float: left; font-weight: bold">Examination</span>
                      
                    <form action="{{route('examinations.store',['patient_id'=>$patient->id,'doctor_id'=>$examination->doctor->id])}}" method="post">
                      @csrf
                        <div class="form-group">
                          <textarea class="form-control" disabled name="drugPrescription" style="background-color: #eeeeee; width: 100%;" id="prescription" rows="10">{{$examination->drugPrescription}}</textarea>
                        </div>
                        @for ($i = 0; $i < count($otcDrugs) && $i < count($Doses); $i++)
                          <div class='row' style='margin:0px 0px 0px -12px;width: 112%;'>
                            <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                              <p style='margin: 15px 0 0px 0;font-size: revert; font-weight: bold;'>Rx:</p>
                            </div>
                            <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                              <p style='margin: 15px 0 0px 0;'>{{$otcDrugs[$i]}}</p>
                            </div>
                          </div>
                          <div class='row' style='margin:-13px 0px 0px -12px;width: 112%;'>
                            <div class='col-xs-2 col-sm-1 col-md-1 col-lg-1'>
                              <p style='margin: 15px 0 0px 0;font-size: revert; font-weight: bold;'>Dose:</p>
                            </div>
                            <div class='col-xs-10 col-sm-11 col-md-11 col-lg-11'>
                              <p style='margin: 15px 0 0px 0;'>{{$Doses[$i]}}</p>
                            </div>
                          </div>
                          {{-- <p><strong>Rx {{$i+1}}: </strong>   {{$otcDrugs[$i]}}
                          <br><strong>Dose {{$i+1}}: </strong>{{ $Doses[$i]}}</p> --}}
                        @endfor
                        {{-- <div class="p-t-15">
                          <a href="{{route('examinations.index',['national_id'=>$patient->national_id])}}"> <button class="btn btn--radius-2 btn--blue" style="background-color:red;" type="button">Cancel</button></a>
                            <button class="btn btn--radius-2 btn--blue" style="float: right;" type="submit">Submit</button>
                        </div> --}}
                        <div class="p-t-15">
                          <span style="float: left;"><span style="font-weight: bold" >Address/ </span> {{$examination->doctor->address}} </span>
                          <span style="float: right;"> <span style="font-weight: bold" > Phone/</span>  {{$examination->doctor->phone}}</span>
                          {{-- <button class="btn btn--radius-2 btn--blue" type="Cancel">Cancel</button> --}}
                        </div>
                        @if (Auth::guard('patient')->user())
                        <div class="p-t-15" style="margin: 16px 0px 0 0;">
                          {{-- <button class="btn btn--radius-2 btn--blue" type="Cancel">Cancel</button> --}}
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="width: -webkit-fill-available;">Write a Review</button>
                        </div>
                        @endif
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>



        



        <!-- END PAGE CONTENT-->

     

        



      </div>

      <!-- END VIEW WAPPER-->



    </div>

    <!-- END MAIN WRAPPER-->



    

    <!-- WEB PERLOAD-->

    <div id="preload">

      <ul class="loading">

        <li></li>

        <li></li>

        <li></li>

      </ul>

    </div>











    <!-- Lib-->

    <script src="{{asset('FlexStart/inputprescriptionassets/scripts/lib/jquery-1.11.3.min.js')}}"></script>

    <script src="{{asset('FlexStart/inputprescriptionassets/scripts/lib/jquery-ui.js')}}"></script>

    <script src="{{asset('FlexStart/inputprescriptionassets/scripts/lib/tether.min.js')}}"></script>



   



    <!-- Theme js-->

    <!-- Concat all plugins js-->

    <script src="{{asset('FlexStart/inputprescriptionassets/scripts/theme/theme-plugins.js')}}"></script>

    <script src="{{asset('FlexStart/inputprescriptionassets/scripts/theme/main.js')}}"></script>

    <!-- Below js just for this demo only-->

    <script src="{{asset('FlexStart/inputprescriptionassets/scripts/demo/demo-skin.js')}}"></script>

    <!-- <script src="assets/scripts/demo/bar-chart-menublock.js"></script> -->

    



    <!-- Below js just for this page only-->

    <!-- <script src="assets/scripts/demo/bar-chart.js"></script> -->



  


{{--  Model for writting doctor review --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: block;">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLongTitle">Review<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i style="font-size: 30px;margin: 10px;" aria-hidden="true">&times;</i>
            </button></h6>
          </div>
          <form action="{{route('examinations.update', $examination)}}" method="post">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <label for="">Patient Review</label>
              <div class="form-group">
                <textarea class="form-control" name="review" rows="2" id="comment" placeholder="Tell us what you think about the prescription. Would you recommend it, and why?"></textarea>
              </div>
              <label for="">Medication Review</label>
              <div class="form-group">
                <textarea class="form-control" name="medicationReview" rows="2" id="comment" placeholder="Tell us what you think about the Medication course."></textarea>
              </div>
              {{-- <label for="">Rating</label>
              <div class="form-group">
                <span class = "fa fa-star checked" style="font-size: 22px;color: orange;"></span>
                <span class = "fa fa-star checked" style="font-size: 22px;color: orange;"></span>
                <span class = "fa fa-star checked" style="font-size: 22px;color: orange;"></span>
                <span class = "fa fa-star checked" style="font-size: 22px;color: orange;"></span>
                <span class = "fa fa-star unchecked" style="font-size: 22px;"></span>
              </div> --}}
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </body>

</html>

