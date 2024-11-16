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
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <img src="{{asset('assets/img/logop.png')}}" alt="Description for image" width="50" height="80">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
                @if (Route::has('login'))
                <div class="navbar align-self-center d-flex">
                           
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    
                        <a class="nav-link" href="{{ route('login') }}"><i class='bx bx-user-circle bx-sm text-primary'></i></a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}"><i class='bx bx-cog bx-sm text-primary'></i></a>
                        @endif
                    @endauth

                    @endif                 

                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    A System <strong>to Report</strong> and 
                                  <br>Manage Incidences of GBV
                              </h1>
                                <p class="banner-body text-muted py-3 mx-0 px-0">
                                    Purple Buzz is a corporate HTML template with Bootstrap 5 Beta 1. This CSS template is 100% free to download provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>. Total 6 HTML pages included in this template. Icon fonts by <a rel="nofollow" href="https://boxicons.com/" target="_blank">Boxicons</a>. Photos are from <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a> and <a rel="nofollow" href="https://icons8.com/" target="_blank">Icons 8</a>.
                              </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Curated Data in One Place
                                </h1>
                                <p class="banner-body text-muted py-3">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->
    <!-- Start View Work -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bx bxs-box bx-lg'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Great transformations successful</h3>
                    <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Record Incident</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <!-- Start Recent Work -->
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row gy-5 g-lg-5 mb-4">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{asset('./assets/img/recent-work-01.jpg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Report</h3>
                                <p class="card-text">Ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{asset('./assets/img/recent-work-02.jpg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Legal</h3>
                                <p class="card-text">Psum officia anim id est laborum.</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{asset('./assets/img/recent-work-03.jpg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Police</h3>
                                <p class="card-text">Sum dolor sit consencutur</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{asset('./assets/img/recent-work-04.jpg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Medical</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{asset('./assets/img/recent-work-05.jpg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Remote</h3>
                                <p class="card-text">Put enim ad minim veniam</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{asset('./assets/img/recent-work-06.jpg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Partners</h3>
                                <p class="card-text">Mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

            </div>
        </div>
    </section>
    <!-- End Recent Work -->



    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2023 GBVRS. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Powered by <a rel="sponsored" class="text-decoration-none text-light" href="#" target="_blank"><strong>CSO</strong></a>
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