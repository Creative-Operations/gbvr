@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Incident</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('incidents.index') }}"> Back</a>
            </div>
        </div>
    </div>



<!-- Start Feature Work -->
<section class="container py-5">

    <h2 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Name: {{ $incident->victim }}</h1>
    <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
       Mobile:  {{ $incident->mobile }}
    </p>
    <p class="feature-work-body text-muted light-300">
        <strong>Location:</strong>
        {{ $incident->location }}
    </p>
    <p class="feature-work-body text-muted light-300">
        <strong>Address:</strong>
        {{ $incident->address }}
    </p>
    <p class="feature-work-body text-muted light-300">
        <strong>Attack Type:</strong>
        {{ $incident->attack_type }}
    </p>
    <p class="feature-work-body text-muted light-300">
        <strong>Details:</strong>
        {{ $incident->description }}
    </p>
    
    
 </section> 
<!-- End Feature Work -->


    
@endsection
<p class="text-center text-primary"><small>GBVRS</small></p>