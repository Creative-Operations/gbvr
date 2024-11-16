@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    <div class="main-content">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                        <!-- Start Recent Work -->
                        <section class="py-5 mb-5">
                            <div class="container">
                                <div class="row gy-5 g-lg-5 mb-4">
                                    @php 
                                    $count_incidents_now = DB::table('incidents')->where('created_at','>=', Carbon\Carbon::now()->subHours(24))->count(); 
                                    @endphp
                                   
                                    <!-- Start Recent Work -->
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" src="./assets/img/recent-work-01.jpg" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title light-300">{{  $count_incidents_now }}</h3>
                                                    <p class="card-text">Todays Totals</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->

                                    @php  
                                    $date = date('Y-m-d', strtotime('-1 days'));
                                    $count_incidents_total = DB::table('incidents')
                                    ->whereDate('created_at', $date)
                                    ->count(); 
                                    @endphp

                                    <!-- Start Recent Work -->
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" src="./assets/img/recent-work-02.jpg" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title light-300">{{ $count_incidents_total }}</h3>
                                                    <p class="card-text">Yesterday.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- End Recent Work -->

                                    <!-- Start Recent Work -->
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title light-300">7 days count </h3>
                                                    <p class="card-text">Last 7 Days Cases.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->

                                    @php   $count_incidents_total = DB::table('incidents')->count(); @endphp


                                    <!-- Start Recent Work -->
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" src="./assets/img/recent-work-04.jpg" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title light-300"> {{ $count_incidents_total }}</h3>
                                                    <p class="card-text">Total</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->

                                    @php   $count_forensics_total = DB::table('forensics')->count(); @endphp

                                    <!-- Start Recent Work -->
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" src="./assets/img/recent-work-05.jpg" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title light-300">{{ $count_forensics_total }}</h3>
                                                    <p class="card-text">Total Investigations</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- End Recent Work -->

                                    <!-- Start Recent Work -->
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" src="./assets/img/recent-work-06.jpg" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title light-300">Help</h3>
                                                    <p class="card-text">How to use the GBV System.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- End Recent Work -->

                                </div>
                            </div>
                        </section>
                        <!-- End Recent Work -->                          
                              
                               
                           
       
             
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
