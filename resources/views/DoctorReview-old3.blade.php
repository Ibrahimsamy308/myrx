<!DOCTYPE html>
<html   x-data="data()" lang="en">
{{-- <html  :class="{ 'theme-dark': dark }" x-data="data()" lang="en"> --}}
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Review</title>

  <!-- Favicons -->
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
  <link href="{{asset('FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">
    <!--  Add Bootstrap cdn  -->
    <!-- <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src = "{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }} "></script>
    <script src = "{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')}}"></script>
    <!--  Add bootstrap icon Library  -->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}} ">
    <style>
      .checked {
          color : yellow;
          font-size : 20px;
      }
      .unchecked {
          font-size : 20px;
      }
  </style>
   
    <link rel="stylesheet" href="{{asset('FlexStart/assets/css/tailwind.output.css')}}"/>
    <script
      src="{{asset('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js')}}"
      defer
    ></script>
    <script src="{{asset('FlexStart/assets/js/init-alpine.js')}}"></script>

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
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <div style="border-radius: 0 0 1.5rem 1.5rem;margin: -3% 7%;width: 53px;height: 20px;">
            <header id="header" class="header fixed-top">
            <a href="{{route('landingPage')}}" class="logo d-flex align-items-center">
              <img src="{{asset('FlexStart/assets/img/myrx_logo.png')}}" alt="">
            </a>
            </header>
          
        </div>
        
        <form action="{{ route('examinations.index') }}" method="GET">
          @csrf
          <ul class="mt-6" style="border-color: gray;">
            <li class="relative px-6 py-3">                
              <div class="form-group"  style="margin: 21px -10px;">
                <label for="nationalid" style="    margin: 0 3px;font-size: small;">National ID</label>
                <input type="nationalid" class="form-control" id="nationalid" name="national_id"  placeholder="National ID" style="border-radius: 0.35rem; padding: 2%; width: 100%;background-color: rgb(236, 233, 233);">
                {{-- <input type="hidden" name="doctor_id" value="{{Auth::guard('doctor')->user()->id}}"> --}}
              
                {{-- <div class="px-6 my-6"> --}}
                  <button type="submit" class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    style="background-color: #0082c3; height: 33px; margin: 14px 0;">
                    Start Appointment
                  </button>
                {{-- </div> --}}
              </div>
                
              <span>Last Appointment</span>
            
            </li>
            @if (Auth::guard('doctor')->user())
              @foreach ($examinations as $examination)
                  @if ($examination->doctor_id==Auth::guard('doctor')->user()->id)
                    <li class="relative px-6 py-3" >
                      <div class="form-group" >
                        <label for="nameofpatient">{{$examination->patient->fname}} {{$examination->patient->lname}}</label>
                        <div class="px-6 my-6">
                          <a href="{{route('examinations.show',$examination)}}">
                          <button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="background-color: #0082c3;" type="button">
                          View Details
                          </button>
                          </a>
                        </div>
                      </div>
                    </li>
                  @endif
              @endforeach
            @endif
          </ul>
        </form>
        
      </div>
    </aside>


      
 
     
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            {{-- <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    style="color: #0082c3;"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search..."
                  aria-label="Search"
                />
              </div>
            </div> --}}
            <div class="flex justify-center flex-1 lg:mr-32">
              
            </div>


            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Theme toggler -->
              {{-- kirolos dark mode  --}}
              {{-- <li class="flex">
                <button
                  class="rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleTheme"
                  aria-label="Toggle color mode"
                >
                  <template x-if="!dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                  </template>
                  <template x-if="dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </template>
                </button>
              </li> --}}
              <!-- Notifications menu -->
              {{-- <li class="relative">
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                    ></path>
                  </svg>
                  <!-- Notification badge -->
                  <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                  ></span>
                </button>
                <template x-if="isNotificationsMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeNotificationsMenu"
                    @keydown.escape="closeNotificationsMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Messages</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          13
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Emails</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          2
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li> --}}
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                {{-- {{dd(Auth::user()->document)}} --}}
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    
                    src="{{asset('materials/'.Auth::user()->document)}}"
                    alt=""
                    aria-hidden="true"
                  />
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="{{route('profile')}}"
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
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
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
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>
                          Logout
                        </span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
              <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                
              
                      <!-- New Table -->
                      <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                          <table class="w-full whitespace-no-wrap">
                            <thead>
                              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                @if (Auth::guard('doctor')->user())
                                  <th class="px-4 py-3">Patient Review</th>
                                @endif
                                <th class="px-4 py-3">Medication Review</th>
                                <th class="px-4 py-3">Stars</th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                              @foreach ($examinations as $examination)
                                  
                              @if (Auth::guard('doctor')->user())
                              @if ($examination->doctor_id==Auth::guard('doctor')->user()->id)
                                 
                                <tr class="text-gray-700 dark:text-gray-400">

                                      <td class="px-4 py-3 text-sm">
                                         {{$examination->review}}
                                      </td>

                                  
                                  <td class="px-4 py-3 text-sm">
                                    {{$examination->medicationReview}}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    
                                    <span class = "fa fa-star unchecked"></span>
                                  </td>
                                </tr>

                                @endif
                                @endif
                                @endforeach
                              

                              {{-- <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Jolina Angelie</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Unemployed
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 369.95
                                </td>
                               
                              
                                  <td class="px-4 py-3 text-sm">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    
                                    <span class = "fa fa-star unchecked"></span>
                                    <span class = "fa fa-star unchecked"></span>
                                  </td>
                              </tr>

                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                             
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Sarah Curry</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Designer
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 86.00
                                </td>
                               
                                <td class="px-4 py-3 text-sm">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                  
                                    <span class = "fa fa-star unchecked"></span>
                                    <span class = "fa fa-star unchecked"></span>
                                    <span class = "fa fa-star unchecked"></span>
                                </td>
                              </tr>

                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Rulia Joberts</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Actress
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 1276.45
                                </td>
                               
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                              </tr>

                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                              
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Wenzel Dashington</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Actor
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                               
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                              </tr>

                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                  
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Dave Li</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Influencer
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                               
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                              </tr>

                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Maria Ramovic</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Runner
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                                
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                              </tr>

                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                   
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Hitney Wouston</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Singer
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                               
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                              </tr>

                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                 
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Hans Burger</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        10x Developer
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                             
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                              </tr> --}}
                            </tbody>
                          </table>
                        </div>
                        <div
                          class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                        >
                          <!-- <span class="flex items-center col-span-3">
                            Showing 21-30 of 100-->
                          </span> 
                          <span class="col-span-2"></span>
                          <!-- Pagination -->
                          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                              <ul class="inline-flex items-center">
                                <li>
                             <!--     <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous"
                                  >
                                    <svg
                                      aria-hidden="true"
                                      class="w-4 h-4 fill-current"
                                      viewBox="0 0 20 20"
                                    >
                                      <path
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                      ></path>
                                    </svg>
                                  </button>
                                </li>-->
                               <!-- <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    1
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    2
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    3
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    4
                                  </button>
                                </li>
                                <li>
                                  <span class="px-3 py-1">...</span>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    8
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    9
                                  </button>
                                </li>-->
                              <!--  <li>
                                  <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next"
                                  >
                                    <svg
                                      class="w-4 h-4 fill-current"
                                      aria-hidden="true"
                                      viewBox="0 0 20 20"
                                    >
                                      <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                      ></path>
                                    </svg>
                                  </button>
                                </li>-->
                              </ul>
                            </nav>
                          </span>
                        </div>
                      </div>
                </div>
                
              </main>
      </div>
    </div>
  </body>
</html>
