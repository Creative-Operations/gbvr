@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>        
    </div>
</div>


     <!-- Start Feature Work -->
     <section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h3 class="feature-work-title h4 text-muted light-300">
                        <strong>Roles:</strong>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                            @endforeach
                        @endif
                    </h3>
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Name: {{ $user->lastname }}- {{ $user->firstname }}</h1>
                    <p class="feature-work-body text-muted light-300">
                        Email: {{ $user->email }}
                    </p>
                    <p class="feature-work-body text-muted light-300">
                        Location: {{ $user->location }}
                    </p>
                    <p class="feature-work-body text-muted light-300">
                        Mobile: {{ $user->mobile }}
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="#">
                            <img class="img-fluid" src="{{asset('./assets/img/feature-work-1.jpg')}}">
                        </a>
                        <a class="col" data-type="image" data-fslightbox="gallery" href="#">
                            <img class="img-fluid" src="{{asset('./assets/img/feature-work-2.jpg')}}">
                        </a>
                    </div>
                    <div class="row pt-4">
                        <p class="feature-work-body text-muted light-300">
                            Remarks: {{ $user->remarks }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Work -->

@endsection