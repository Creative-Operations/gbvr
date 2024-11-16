@extends('layouts.app')
@section('content')

 <!-- Start Banner Hero -->
<div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
        <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
            <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Role Management</h1>
            
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
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
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
@foreach ($roles as $key => $role)
<div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
    <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
        <i class="display-1 bx bx-package pt-4">{{ ++$i }}</i>
        <h5 class="h5 semi-bold-600 pb-4 light-300">{{ $role->name }}</h5>
    </div>
    
    <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
        <div class="w-100 light-300">
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </div>
    </div>
</div>
<!-- End Pricing Horizontal -->



    @endforeach

{!! $roles->render() !!}
<p class="text-center text-primary"><small>GBVRS</small></p>
@endsection