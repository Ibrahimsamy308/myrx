<!DOCTYPE html>
<html   x-data="data()" lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Review</title>

    <!-- Favicons -->
    <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
    <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="{{asset('FlexStart/assets/css/tailwind.output.css')}}"/>
    <script src="{{asset('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js')}}" defer></script>
    <script src="{{asset('FlexStart/assets/js/init-alpine.js')}}"></script>

    {{-- sidebar css--}}
    <link rel="stylesheet" href="{{asset('FlexStart/assets/css/sidePar.css')}}">

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
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
      <nav id="sidebar">

        <div style="padding:20px;width: 95px;height: 20px;">
            <a href="{{route('landingPage')}}" class="logo d-flex align-items-center">
              <img src="{{asset('FlexStart/assets/img/myrx_logo.png')}}" alt="">
            </a>
        </div>

        <ul class="list-unstyled components" >
            <p style="margin-top:10px">Make Appointment</p>

            <form action="{{ route('examinations.index') }}" method="GET">
              @csrf
              <li style="padding:2px 10px">
                <label for="nationalid" style="margin: 0 3px;font-size: small;">National ID</label>
                <input type="nationalid" class="form-control" id="nationalid" name="national_id"  placeholder="National ID" style="border-radius: 0.35rem; padding: 5px; width: 93%;background-color: rgb(236, 233, 233);">
                
                <button type="submit" class="btn btn-primary btn-lg" style="width: 93%;height: 40px;margin: 20px 0px; font-size: 16px">Start Appointment  </button>
                {{-- <button type="submit" class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    style="background-color: #0082c3; width: 93%; margin-top:10px">
                    Start Appointment
                </button> --}}
              </li>
              <li >


              {{-- @if (Auth::guard('doctor')->user())
                @foreach ($examinations as $examination)
                    @if ($examination->doctor_id==Auth::guard('doctor')->user()->id)
                      <li class="relative px-6 py-3" >
                        <div class="form-group" >
                          <label for="nameofpatient">{{$examination->patient->fname}} {{$examination->patient->lname}}</label>
                          <div class="px-6 my-6">
                            <a href="{{route('examinations.show',$examination)}}">
                            <button
                              class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                              style="background-color: #0082c3;" type="button"
                              >
                            View Details
                            </button>
                            </a>
                          </div>
                        </div>
                      </li>
                    @endif
                @endforeach
              @endif --}}


              @if (Auth::guard('doctor')->user())
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Last Appointments</a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                    @foreach ($examinations as $index=>$examination) 
                    {{-- {{$index}}                  --}}
                      @if ($examination->doctor_id==Auth::guard('doctor')->user()->id && $index<5)
                        <li>
                          <a href="{{route('examinations.show',$examination)}}">{{$examination->patient->fname}} {{$examination->patient->lname}}</a>
                          
                        </li>
                      @endif
                    @endforeach
                  </ul> 
              @endif
            </li>
            </form>
            {{-- <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li> --}}
        </ul>

        {{-- <ul class="list-unstyled CTAs">
            <li>
                <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
            </li>
            <li>
                <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
            </li>
        </ul> --}}
      </nav>
      
      
      <div class="flex flex-col flex-1 w-full">
        {{-- header --}}
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
            <!-- Mobile hamburger -->
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fas fa-align-left"></i>
              <span></span>
            </button>
            {{-- <div class="flex justify-center flex-1 lg:mr-32">
            </div> --}}

            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Profile menu -->
              <li class="relative">
                <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                  <img class="object-cover w-8 h-8 rounded-full" src="{{asset('materials/'.Auth::user()->document)}}" alt="doctor image" aria-hidden="true"/>
                </button>
                
                <template x-if="isProfileMenuOpen">
                  <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                    <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{route('profile')}}">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                    {{-- settings --}}
                    {{-- <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          ></path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li> --}}
                    <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" ></path>
                        </svg>
                        <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>

        {{-- body  --}}
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            {{-- new table --}}
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      @if (Auth::guard('doctor')->user())
                        <th class="px-4 py-3">Patient Review</th>
                      @endif
                      <th class="px-4 py-3">Medication Review</th>
                      {{-- <th class="px-4 py-3">Stars</th> --}}
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($examinations as $examination)    
                      @if (Auth::guard('doctor')->user() && $examination->doctor_id==Auth::guard('doctor')->user()->id)
                        @if($examination->review!=""||$examination->medicationReview!="")                      
                        <tr class="text-gray-700 dark:text-gray-400">
                          <td class="px-4 py-3 text-sm">
                              {{$examination->review}}
                          </td>
                          <td class="px-4 py-3 text-sm">
                            {{$examination->medicationReview}}
                          </td>
                          @endif
                          {{-- <td class="px-4 py-3 text-sm">
                            <span class = "fa fa-star checked"></span>
                            <span class = "fa fa-star checked"></span>
                            <span class = "fa fa-star checked"></span>
                            <span class = "fa fa-star checked"></span>
                            
                            <span class = "fa fa-star unchecked"></span>
                          </td> --}}
                        </tr>
                      @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{-- < 1 2 3 ... 8 > --}}
              {{-- <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      <li>
                       <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                          <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20" >
                            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd" ></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                      </li>
                      <li>
                        <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                      </li>
                      <li>
                        <span class="px-3 py-1">...</span>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"aria-label="Next">
                          <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd" fill-rule="evenodd"></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div> --}}
            </div>
          </div>
          
        </main>
      </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
  </body>
</html>
