@extends('layouts.app')
@section('content')

 <!-- Start Banner Hero -->
<div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
        <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
            <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">User Management</h1>
            
            <p class="banner-body pb-2 light-300">
                Please note you may not have access to all sections.
                Admin can authorise.
            </p>
            <a class="btn rounded-pill btn-outline-light px-4 me-4 light-300" href="{{ route('incidents.index') }}">Incidents</a>
            <a class="btn rounded-pill btn-secondary text-light px-4 light-300" href="{{ route('forensics.index') }}">Investigations</a>
        </div>
    </div>
</div>
<!-- End Banner Hero -->

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            @can('user-create')
              <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            @endcan
            
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@foreach ($data as $key => $user)
<!-- Start Pricing Horizontal -->

<div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
    <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
        <i class="display-1 bx bx-package pt-4">{{ ++$i }}</i>
        <h5 class="h5 semi-bold-600 pb-4 light-300">{{ $user->firstname }}-{{ $user->lastname }}</h5>
    </div>
    <div class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
        <ul class="text-left px-4 list-unstyled mb-0 light-300">
            <li><i class="bx bxs-circle me-2"></i>Mobile: {{ $user->mobile }}</li>
            <li><i class="bx bxs-circle me-2"></i>Location: {{ $user->location }}</li>
            <li><i class="bx bxs-circle me-2"></i>Email: {{ $user->email }}</li>
            <li><i class="bx bxs-circle me-2"></i>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
                @endif
        </li>
        </ul>
    </div>
    <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
        <div class="w-100 light-300">
            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End Pricing Horizontal -->


@endforeach

{!! $data->render() !!}
<p class="text-center text-primary"><small>GBVRS</small></p>
@endsection