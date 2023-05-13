<!DOCTYPE html>

<html lang="en-us">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prescription</title>
    <meta name="prescription" content="">
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

    {{-- <style>
      .se-pre-con {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background:url('public/images/loader-64x/Preloader_2.gif')  center no-repeat #fff;
    }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
      //paste this code under head tag or in a seperate js file.
      // Wait for window load
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
      });
    </script> --}}

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

  @yield('body')

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
</html>




