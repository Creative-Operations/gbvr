<!DOCTYPE html>
<html lang="en">

<head>
    <title>GBVRS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- Load Require CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{asset('assets/css/boxicon.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/templatemo.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <style>
        /* Set the maximum width of the table cell */
        td {
            max-width: 150px; /* Adjust this value as needed */
            max-height: 300px; /* Adjust this value as needed */
            white-space: nowrap; /* Prevent text from wrapping to the next line */
            overflow: hidden; /* Hide any overflowing content */
            text-overflow: ellipsis; /* Display an ellipsis (...) when the text overflows */
        }
    </style>   
<!--
  
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('assets/img/cso-logo.jpg')}}" alt="Description for image" width="250" height="102">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a style="color:#800080" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a  style="color:#800080"class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                
                    
                        <li><a style="color:#800080" class="nav-link" href="{{ route('home') }}">Dashboard</a></li>
                        <li><a style="color:#800080" class="nav-link" href="{{ route('users.index') }}">Users</a></li>
                        <li><a style="color:#800080" class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
                        

                        <li><a style="color:#800080" class="nav-link" href="{{ route('incidents.index') }}">Incidents</a></li>
                        <li><a style="color:#800080" class="nav-link" href="{{ route('forensics.index') }}">Investigations</a></li>
                        <li class="nav-item dropdown">
                            <a style="color:#800080" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>


    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2023 CSO. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Powered by <a rel="sponsored" class="text-decoration-none text-light" href="#" target="_blank"><strong>Civil Society Organisation</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('assets/js/isotope.pkgd.js')}}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="{{asset('assets/js/templatemo.js')}}"></script>
    <!-- Custom -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>