@extends('layouts.app')
@section('content')

 <!-- Start Banner Hero -->
<div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
        <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
            <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Investigation Management</h1>
            
            <p class="banner-body pb-2 light-300">
                Please note you may not have access to all sections.
                Admin can authorise.
            </p>
            <a class="btn rounded-pill btn-outline-light px-4 me-4 light-300" href="{{ route('incidents.index') }}">Incidents</a>
            <a class="btn rounded-pill btn-secondary text-light px-4 light-300" href="#">Investigations</a>
        </div>
    </div>
</div>
<!-- End Banner Hero -->

    <div class="row">
        <div class="col-lg-12 margin-tb">
     
            <div class="pull-right">
                @can('forensic-create')
                <a class="btn btn-success" href="{{ route('forensics.create') }}"> Create New Investigations</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Start Pricing Horizontal -->
@foreach ($forensics as $forensic)
<div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
    <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
        <i class="display-1 bx bx-package pt-4">{{ ++$i }}</i>
       
    </div>
     <div>
        <h2 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Incident Name.</h1>
            <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
                    {{ $forensic->incident->victim }}
            </p>
            <h2 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Police Report.</h1>
            <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
                {{ $forensic->police }}
            </p>
            <h2 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Medical Report.</h1>
            <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
                {{ $forensic->medical }}
            </p>
            <h2 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Forensic Status.</h1>
            <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
                {{ $forensic->status }}  
            </p>
            <h2 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Legal Report.</h1>
            <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
                {{ $forensic->legal }}
            </p>
            <h2 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Remarks.</h1>
            <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
                {{ $forensic->remarks }}
            </p>
     </div>

    <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
        <div class="w-100 light-300">
            <form action="{{ route('forensics.destroy',$forensic->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('forensics.show',$forensic->id) }}">Show</a>
                @can('forensic-edit')
                <a class="btn btn-primary" href="{{ route('forensics.edit',$forensic->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('forensic-delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </div>
    </div>
</div>
<!-- End Pricing Horizontal -->
@endforeach

    {!! $forensics->links() !!}
    <p class="text-center text-primary"><small>GBVRS</small></p>
@endsection