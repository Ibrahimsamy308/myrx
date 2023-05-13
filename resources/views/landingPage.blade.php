 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Rx</title>
  <meta content="google-site-verification=vEuBsm6fZsWVv-nagFwSTerguiX-JxRaNKp8SI5uFhY" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('FlexStart/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="{{asset('FlexStart/assets/css/style.css')}}" rel="stylesheet">


 

    {{--css Slideshow --}}
    <style>
          {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            }

            /* Caption text */
           .text {
            color: #000000;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active2 {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
            }
    </style>

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
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
    
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
        <a href="{{route('landingPage')}}" class="logo d-flex align-items-center">
          {{-- <img src="{{asset('FlexStart/assets/img/logo.png')}}" alt=""> --}}
          <img src="{{asset('FlexStart/assets/img/myrx_logo.png')}}" alt="">
          {{-- <span>My Rx</span> --}}
        </a>
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
           <li><a class="nav-link scrollto" href="#values">Services</a></li> 
            
            {{-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> --}}
            {{--<li><a class="nav-link scrollto" href="#team">Team</a></li>--}}
             <li><a class="nav-link scrollto" href="#Partners">Partners</a></li>
            {{-- <li><a class="nav-link scrollto" href="#reviews">Reviews</a></li> --}}
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

	          <li class="dropdown"><a href="#"><span>Login As</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{route('login/patient')}}">Patient</a></li>
                <li><a href="{{route('login/doctor')}}">Doctor</a></li>
                <li><a href="{{route('login/pharmacist')}}">Pharmacist</a></li>
                <li><a href="{{route('login/radiologist')}}">Radiologist</a></li>
                <li><a href="{{route('login/analytical')}}">Analytical</a></li>
              </ul>
            </li>

            <li class="dropdown"><a href="#"><span>Register As</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{route('register/patient')}}">Patient</a></li>
                <li><a href="{{route('register/doctor')}}">Doctor</a></li>
                <li><a href="{{route('register/pharmacist')}}">Pharmacist</a></li>
                <li><a href="{{route('register/radiologist')}}">Radiologist</a></li>
                <li><a href="{{route('register/analytical')}}">Analytical</a></li>
              </ul>
            </li>
            
            @if (Auth::check())
                <li class="dropdown"><a href="#">
                  <div class="circle-box">
                    <img src="{{asset('materials/').'/'.Auth::user()->document}}" style="width:32px ;clip-path: circle();" alt="">
                  </div>
                  {{-- <span> {{Auth::user()->fname}} {{Auth::user()->lname}}</span> --}}<i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="{{route('changePass')}}">Change Password</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </ul>
              </li>
            @endif
            
            {{-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> --}}
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
   
    <section id="hero" class="hero d-flex align-items-center">
  
                <div class="container">
                    <div class="row">
                      <div class="col-lg-6 d-flex flex-column justify-content-center">
                          <h1 data-aos="fade-up">The First Digital Prescription in Egypt</h1>
                          <h2 data-aos="fade-up" data-aos-delay="400" style="font-size:20px" >MyRx is an Egyptian healthcare platform that enables doctors to write electronic prescriptions instead of the handwritten prescription.</h2> 
                          <div data-aos="fade-up" data-aos-delay="600">
    

                            
                              <div class="text-center text-lg-start" style="margin-bottom: 10%" >

                                <div class="navbar" >
                                  <li class="dropdown" style=" list-style-type: none;"><a class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" 
                                    data-toggle="collapse"  href="#"><span>Get Start</span> <i class="bi bi-arrow-right"></i> </i></a>
                                    <ul>
                                      <li><a href="{{route('register/patient')}}">Patient</a></li>
                                      <li><a href="{{route('register/doctor')}}">Doctor</a></li>
                                      <li><a href="{{route('register/pharmacist')}}">Pharmacist</a></li>
                                      <li><a href="{{route('register/radiologist')}}">Radiologist</a></li>
                                      <li><a href="{{route('register/analytical')}}">Analytical</a></li>
                                    </ul>
                                  </li>
                                </div>

                                    {{-- <a class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"  data-toggle="collapse"  
                                      href="{{route('register/patient')}}" role="button" aria-expanded="false" aria-controls="collapseExample" style="width: 200px" >
                                      <span>Get Start</span>
                                      <i class="bi bi-arrow-right"></i>
                                    </a> --}}
                                    {{-- <div class="" id="collapseExample">
                                        OR
                                    </div>  --}}
                                    
                                    {{-- <a href="{{route('login/pharmacist')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" style="width: 200px">
                                      <span>Pharmacist</span>
                                      <i class="bi bi-arrow-right"></i>
                                    </a>     --}}
                              </div>
                        </div>
                    </div>
                    
                    
                    
                          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                      
                              <img src="{{asset('FlexStart/img/Picture1.png')}}" >
                          </div>
                      </div>
                      </div>
               
                </div>
              </div>
    </section> 
    <!-- End Hero -->
     {{--
     <section id="hero" class="hero d-flex align-items-center" >
       <div class="container" data-aos="fade-up">
         <div class="row ">
            <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <div class="slideshow-container">

                      
                     

                        <div class="mySlides fade">
                        <img src="{{asset('public/FlexStart/img/Picture1.png')}}" style="width:100%">
                        <div class="text">Picture 1</div>
                        </div>

                        <div class="mySlides fade">
                        <img src="{{asset('public/FlexStart/img/Picture1.png')}}" style="width:100%">
                        <div class="text">Picture 2</div>
                        </div>


                        <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="{{asset('public/FlexStart/img/Picture1.png')}}" style="width:100%">
                        <div class="text">Picture 3</div>
                        </div>

                        </div>
                        <br>

                        <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                    </div>
                </div>
                </div>
         </div>
        </section>
      --}}
  
    <main id="main">
   
      <!-- ======= About Section ======= -->
      <section id="about" class="about" >
  
        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h2 style="font-size: 25px;">Vision</h2>
                
                <p style="font-size: 20px;">
                  By 2030, it is expected that the era of the handwritten prescription will end, and all Egyptians will keep all their medical records at an electronic medical profile.                  
                </p>
                {{-- <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div> --}}
              </div>
            </div>
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200" >
              <img src="{{asset('FlexStart/assets/img/vision.jpeg')}}" class="img-fluid" alt="">
            </div>
  
          </div>
        </div>
  
      </section><!-- End About Section -->



  
      <!-- ======= Values Section ======= -->
     <section id="values" class="about" >
  
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Our Services</h2>
        
          </header>
          <div class="row gx-0">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                  <h2 style="font-size: 25px;">Digital prescription</h2>

                
                <p style="font-size: 20px;">
                 Now you can dispense your prescription online without any errors in dispensing the medicine by using our digital prescription.                 
                </p>
              </div>
            </div>
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
               <img src="{{asset('FlexStart/assets/img/prescription.png')}}" class="img-fluid" alt="">
            </div>
  
          </div>


                    {{--2--}}
            <div class="row gx-0">

             <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
               <img src="{{asset('FlexStart/assets/img/keep all.jpeg')}}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                  <h2 style="font-size: 25px;">Keep all your medical files in one place</h2>

                
                <p style="font-size: 20px;">
                 You can receive your prescriptions, results of your tests and x-rays, through your account and save them to create electronic medical profile.                 
                </p>
              </div>
            </div>
  
           
  
          </div>
            {{-- <div class="row gx-0">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                  <h2 style="font-size: 25px;">Real reviews from patients about medications and doctor diagnosis</h2>

                
                <p style="font-size: 20px;">
                 Doctors'  and medications reviews are from patients after finishing the period of treatment who have already visited the doctor and committed to the period to treatment.
                </p>
              </div>
            </div>
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('public/FlexStart/assets/img/real doctor review.png')}}" class="img-fluid" alt="">
            </div>
  
          </div> --}}

                               {{--4--}}
            <div class="row gx-0">

              
    
                  <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2 style="font-size: 25px;">Emergency file to save your life</h2>
            
                      <p style="font-size: 20px;">
                        Protect yourself n difficult and emergency situations from medical errors resulting from the lack of information, and keep all medical files linked to your National ID number on our platform.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('FlexStart/assets/img/emergency.jpeg')}}" class="img-fluid" alt="">
                </div>
    
             </div>
                   {{--5--}}
            <div class="row gx-0">

              <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('FlexStart/assets/img/Book your.jpg')}}" class="img-fluid" alt="">
             </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="content">
                      <h2 style="font-size: 25px;"> Book your medications</h2>
                
                    <p style="font-size: 20px;">
                  Now you can book your medications while you are still in the clinic and deliver it to your home or going to receive them from the pharmacy
                    </p>
                  </div>
                </div>

            
           </div>

               {{--6--}}
            <div class="row gx-0">

            

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                  <h2 style="font-size: 25px;">Drug interactions checker</h2>
             
                <p style="font-size: 20px;">
                 Doctors now could check from drug-drug interactions and drug-disease interactions while the patient is still at the clinic using our database of drugs
                </p>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{asset('FlexStart/assets/img/Drug interactions.png')}}" class="img-fluid" alt="">
        </div>
           
          </div>




        </div>
  
      </section>

      {{--
      <section id="values" class="values">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Our Services</h2>
        
          </header>
  
          <div class="row">
  
            <div class="col-lg-4">
              <div class="box" data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset('public/FlexStart/assets/img/prescription.png')}}" class="img-fluid" alt="">
                <h3>Digital prescription</h3>
                <p>Now you can dispense your prescription online without any errors in dispensing the medicine by using our digital prescription.</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="400">
                <img src="{{asset('public/FlexStart/assets/img/oneplace.png')}}" class="img-fluid" alt="">
                <h3 style="padding-top:50px">Keep all your medical files in one place</h3>
                <p>You can receive your prescriptions, results of your tests and x-rays, through your account and save them to create electronic medical profile.</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="600">
                <img src="{{asset('public/FlexStart/assets/img/Accountability.png')}}" class="img-fluid" alt="">
                <h3>Accountability</h3>
                <p>Driving a spirit of excellence, stewardship and integrity in all that I do for others.</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="600">
                <img src="{{asset('public/FlexStart/assets/img/Respect.jpg')}}" class="img-fluid" alt="">
                <h3>Respect</h3>
                <p>Treating others, the way I want to be treated.</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="600">
                <img src="{{asset('public/FlexStart/assets/img/Empathy.png')}}" class="img-fluid" alt="">
                <h3 style="padding-top:60px">Empathy</h3>
                <p>Being vulnerable and seeking first to understand others so I can best meet their needs.</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="600">
                <img src="{{asset('public/FlexStart/assets/img/icare.png')}}" class="img-fluid" alt="">
                <h3>ICARE Stands for</h3>
                <p>International Cancer Alliance for Reasearch and Education. 
                  The My Rx values are a bold proclamation of how we provide the best experiences 
                  and services to you, your family and the community.
                </p>
              </div>
            </div>

  
          </div>
  
        </div>
  
      </section>--}}
      <!-- End Values Section -->
  
      <!-- ======= Counts Section ======= -->
      {{-- <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Happy Clients</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Projects</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-headset" style="color: #15be56;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Hours Of Support</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-people" style="color: #bb0852;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Hard Workers</p>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Counts Section --> --}}
  
      <!-- ======= Features Section ======= -->
      {{-- <section id="features" class="features">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Features</h2>
            <p>Laboriosam et omnis fuga quis dolor direda fara</p>
          </header>
  
          <div class="row">
  
            <div class="col-lg-6">
              <img src="{{asset('public/FlexStart/assets/img/features.png')}}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
              <div class="row align-self-center gy-4">
  
                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Eos aspernatur rem</h3>
                  </div>
                </div>
  
                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Facilis neque ipsa</h3>
                  </div>
                </div>
  
                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Volup amet voluptas</h3>
                  </div>
                </div>
  
                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Rerum omnis sint</h3>
                  </div>
                </div>
  
                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Alias possimus</h3>
                  </div>
                </div>
  
                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Repellendus mollitia</h3>
                  </div>
                </div>
  
              </div>
            </div>
  
          </div> <!-- / row -->
  
          <!-- Feature Tabs -->
          {{-- <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-6">
              <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>
  
              <!-- Tabs -->
              <ul class="nav nav-pills mb-3">
                <li>
                  <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
                </li>
                <li>
                  <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
                </li>
                <li>
                  <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
                </li>
              </ul><!-- End Tabs -->
  
              <!-- Tab Content -->
              <div class="tab-content">
  
                <div class="tab-pane fade show active" id="tab1">
                  <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                  </div>
                  <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                </div><!-- End Tab 1 Content -->
  
                <div class="tab-pane fade show" id="tab2">
                  <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                  </div>
                  <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                </div><!-- End Tab 2 Content -->
  
                <div class="tab-pane fade show" id="tab3">
                  <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                  </div>
                  <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                </div><!-- End Tab 3 Content -->
  
              </div>
  
            </div>
  
            <div class="col-lg-6">
              <img src="{{asset('public/FlexStart/assets/img/features-2.png')}}" class="img-fluid" alt="">
            </div>
  
          </div><!-- End Feature Tabs --> --}}
  
          <!-- Feature Icons -->
          {{-- <div class="row feature-icons" data-aos="fade-up">
            <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>
  
            <div class="row">
  
              <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="{{asset('public/FlexStart/assets/img/features-3.png')}}" class="img-fluid p-4" alt="">
              </div>
  
              <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">
  
                  <div class="col-md-6 icon-box" data-aos="fade-up">
                    <i class="ri-line-chart-line"></i>
                    <div>
                      <h4>Corporis voluptates sit</h4>
                      <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="ri-stack-line"></i>
                    <div>
                      <h4>Ullamco laboris nisi</h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="ri-brush-4-line"></i>
                    <div>
                      <h4>Labore consequatur</h4>
                      <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="ri-magic-line"></i>
                    <div>
                      <h4>Beatae veritatis</h4>
                      <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="ri-command-line"></i>
                    <div>
                      <h4>Molestiae dolor</h4>
                      <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="ri-radar-line"></i>
                    <div>
                      <h4>Explicabo consectetur</h4>
                      <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                    </div>
                  </div>
  
                </div>
              </div>
  
            </div>
  
          </div>
  
        </div>
  
      </section> --}}    
      <!-- End Features Section -->
  
      <!-- ======= Services Section ======= -->
      {{-- <section id="Features" class="services">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Features</h2>
            <p>To be the partner of choice as we transform healthcare for our communities</p>
          </header>
  
          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <i class="ri-discuss-line icon"></i>
                <h3>Digital Prescription</h3>
                <p>Digital prescription to avoid maitakes of reading prescriptions drugs or prescription instruction.</p>
                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-box orange">
                <i class="ri-discuss-line icon"></i>
                <h3>Drug Interaction Checker</h3>
                <p>To avoid Drug to Drug interaction and Drug to disease interaction.</p>
                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-box green">
                <i class="ri-discuss-line icon"></i>
                <h3>Medical Profile</h3>
                <p>Store all Data to make medical history for all users.</p>
                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-box red">
                <i class="ri-discuss-line icon"></i>
                <h3>Emergency Situations</h3>
                <p>Use national ID of patient to know all his medical history in emergency situations to save lives.</p>
                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-box purple">
                <i class="ri-discuss-line icon"></i>
                <h3>Online chat</h3>
                <p>Communication between patient and physician or pharmacists or lab test by chat on platform so avoid interaction with Health care facilities.</p>
                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
              <div class="service-box pink">
                <i class="ri-discuss-line icon"></i>
                <h3>Dolori Architecto</h3>
                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section>
      <!-- End Services Section -->
       --}}
  
      <!-- ======= Pricing Section ======= -->
      {{-- <section id="pricing" class="pricing">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Pricing</h2>
            <p>Check our Pricing</p>
          </header>
  
          <div class="row gy-4" data-aos="fade-left">
  
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="box">
                <h3 style="color: #07d5c0;">Free Plan</h3>
                <div class="price"><sup>$</sup>0<span> / mo</span></div>
                <img src="{{asset('public/FlexStart/assets/img/pricing-free.png')}}" class="img-fluid" alt="">
                
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="box">
                <span class="featured">Featured</span>
                <h3 style="color: #65c600;">Starter Plan</h3>
                <div class="price"><sup>$</sup>19<span> / mo</span></div>
                <img src="{{asset('public/FlexStart/assets/img/pricing-starter.png')}}" class="img-fluid" alt="">
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="box">
                <h3 style="color: #ff901c;">Business Plan</h3>
                <div class="price"><sup>$</sup>29<span> / mo</span></div>
                <img src="{{asset('public/FlexStart/assets/img/pricing-business.png')}}" class="img-fluid" alt="">
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="box">
                <h3 style="color: #ff0071;">Ultimate Plan</h3>
                <div class="price"><sup>$</sup>49<span> / mo</span></div>
                <img src="{{asset('public/FlexStart/assets/img/pricing-ultimate.png')}}" class="img-fluid" alt="">
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Pricing Section --> --}}
  
      <!-- ======= F.A.Q Section ======= -->
      {{-- <section id="faq" class="faq">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </header>
  
          <div class="row">
            <div class="col-lg-6">
              <!-- F.A.Q List 1-->
              <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      Non consectetur a erat nam at lectus urna duis?
                    </button>
                  </h2>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                    </button>
                  </h2>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                    </button>
                  </h2>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
  
            <div class="col-lg-6">
  
              <!-- F.A.Q List 2-->
              <div class="accordion accordion-flush" id="faqlist2">
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                      Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                    </button>
                  </h2>
                  <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                      Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                    </button>
                  </h2>
                  <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                      Varius vel pharetra vel turpis nunc eget lorem dolor?
                    </button>
                  </h2>
                  <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End F.A.Q Section --> --}}
  
      
  
     
  
      <!-- ======= Team Section ======= -->
      {{--
      <section id="team" class="team">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Team</h2>
            <p>Our hard working team</p>
          </header>
  
          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/gad.jpeg')}}" class="img-fluid" style="height: 361px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Ahmed Gad</h4>
                  <span>Chief Executive Officer (CEO)</span>
                  <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/Boula.jpeg')}}" class="img-fluid" style="height: 361px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Boula Nessiem</h4>
                  <span>Web Developer (BackEnd developer)</span>
                  <p>Bachelor Degree from Arab Academy for Science, Technology & Maritime Transport. Back-end PHP developer laravel. </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/Kero.jpeg')}}" class="img-fluid" style="height: 361px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Kirolos Khamis</h4>
                  <span>Web Developer (Full Stack developer)</span>
                  <p>Bachelor Degree from Arab Academy for Science, Technology & Maritime Transport. Full Stack developer. </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/hima.jpeg')}}" class="img-fluid" style="height: 361px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Ibrahim Samy</h4>
                  <span>Web Developer (Full Stack developer)</span>
                  <p>Bachelor Degree from Arab Academy for Science, Technology & Maritime Transport. Full Stack developer.</p>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section>
      --}}
      <!-- End Team Section -->

      <!-- ======= Partners Section ======= -->
      <section id="Partners" class="team">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <p>Our Partners</p>
          </header>
  
          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('FlexStart/assets/photos/AAST.jpg')}}" class="img-fluid" style="height: 256px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/AAST.Entrepreneurship.Center"><i class="bi bi-facebook"></i></a>
                     <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>AASTEC</h4>
                  <span>Arab Academy for Science, Technology & Maritime Transport Enterpreneurship Center</span>
                {{--  <p>*********************</p> --}}
                 {{-- <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>--}}
                </div>
              </div>
            </div>
           

           
              <!--<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('FlexStart/assets/photos/doc2.jpg')}}" class="img-fluid" style="height: 306px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. ***********</h4>
                   <span>Specialization: *********</span>
                 <p>*********************</p>>
                 {{-- <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>--}}
                </div>
              </div>
            </div>
         
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('FlexStart/assets/photos/doc3.jpg')}}" class="img-fluid" style="height: 306px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. ******</h4>
                 <span>Specialization: *********</span>
                  <p>*********************</p>
                 {{-- <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>--}}
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('FlexStart/assets/photos/doc1.jpg')}}" class="img-fluid" style="height: 306px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. *******</h4>
                   <span>Specialization: *********</span>
                 <p>*********************</p>
                 {{-- <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>--}}
                </div>
              </div>
            </div> 
-->
          </div>
  
        </div>
  
      </section><!-- End partners Section -->

      
      <!-- ======= reviews Section ======= -->
      {{-- <section id="reviews" class="team">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <p>Doctors Reviews</p>
          </header>
  
          <div class="row gy-4" >
  
             <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/doc3.jpg')}}" class="img-fluid" style="height: 256px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                   <h4>Dr. ******</h4>
                 <span>Specialization: **********</span>
                 <p>********************* ****************************************</p> 
                 <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>
                </div>
              </div>
            </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/doc3.jpg')}}" class="img-fluid" style="height: 256px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                   <h4>Dr. ******</h4>
                 <span>Specialization:  **************</span>
                 <p>********************* ****************************************</p> 
                 <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/doc3.jpg')}}" class="img-fluid" style="height: 256px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                   <h4>Dr. ******</h4>
                 <span>Specialization:  ************</span>
                 <p>********************* ****************************************</p> 
                 <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>
                </div>
              </div>
            </div>
          
  
           <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src=" {{asset('public/FlexStart/assets/photos/doc3.jpg')}}" class="img-fluid" style="height: 256px;" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                   <h4>Dr. ******</h4>
                 <span>Specialization: *********</span>
                 <p>********************* ****************************************</p> 
                 <p>Startup trainee at Arab Academy for Science, Technology & Maritime Transport. AAST public Relations team.</p>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </section> --}}
      <!-- End reviews Section -->
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </header>
  
          <div class="row gy-4">
  
            <div class="col-lg-6">
  
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>Tosson,<br>Abu Qir, Alexanderia</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+2 01289189890</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    {{-- <p>Ahmedhashemgad7@gmail.com</p> --}}
                    {{-- <a href="mailto:support@myrx-eg.com">support@myrx-eg.com</a> --}}
                    <a href="mailto:ibrahimsamy308@gmail.com">ibrahimsamy308@gmail.com</a>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>24 Hours</p>
                  </div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-6">
		{{-- forms/contact.php --}}
            {{-- class="php-email-form" --}}
            
              <form action="{{route('contact.myrx')}}" method="post" style="background:#fafbff;padding: 30px;height: 100%;">
                @csrf
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
  
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
  
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
  
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
  
                  <div class="col-md-12 text-center">
                    {{-- <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent and we will contact you ASAP. Thank you!</div> --}}
                    @if(session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                    @endif
                    <button type="submit" style="background: #4154f1;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 4px;">Send Message</button>
                    
                  </div>
  
                </div>
                {{-- <button type="submit">ok</button> --}}
              </form>
              {{--<form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
  
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
  
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
  
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
  
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                  </div>
  
                </div>
              </form>--}}
  
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Contact Section -->
  
    </main><!-- End #main -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
  
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="{{route('landingPage')}}" class="logo d-flex align-items-center">
                {{-- <img src="{{asset('public/FlexStart/assets/img/logo.png')}}" alt=""> --}}
                <img src="{{asset('FlexStart/assets/img/myrx_logo.png')}}" alt="">
                {{-- <span>My Rx</span> --}}
              </a>
              <p>To improve the health and well-being of those we serve.
                <br>
                To be the partner of choice as we transform healthcare for our communities.
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
              </div>
            </div>
  
            <div class="col-lg-2 col-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#values">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#Partners">Partners</a></li>
                {{-- <li><i class="bi bi-chevron-right"></i> <a href="#reviews">Reviews</a></li> --}}
                     <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
           
           
              </ul>
            </div>
  
  
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
              <h4>Contact Us</h4>
              <p>
                Tosson<br>
                Abu Qir<br>
                Alexanderia <br><br>
                <strong>Phone:</strong> +2 01289189890<br>
                <strong>Email:</strong> ibrahimsamy308@gmail.com<br>
              </p>
  
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>My Rx</span></strong>. All Rights Reserved
        </div>
        
      </div>
    </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="{{asset('FlexStart/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('FlexStart/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('FlexStart/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('FlexStart/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('FlexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('FlexStart/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{asset('FlexStart/assets/js/main.js')}}"></script>
     
     {{--Script Slideshow --}}
    <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 4000); // Change image every 2 seconds
                    }
    </script>
  
</body>
  
</html>
