@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>


 <!-- Start Feature Work -->
 <section class="bg-light py-5">
    <div class="feature-work container my-4">
        <div class="row d-flex d-flex align-items-center">
            <div class="col-lg-5">
                <h3 class="feature-work-title h4 text-muted light-300">
                    <strong>Name:</strong>
                    {{ $role->name }}
                </h3>
                <h1 class="feature-work-heading h2 py-3 semi-bold-600"></h1>
                <p class="feature-work-body text-muted light-300">
                    <strong>Permissions:</strong>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $v)
                            <label class="label label-success">{{ $v->name }},</label>
                        @endforeach
                    @endif
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

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature Work -->


@endsection