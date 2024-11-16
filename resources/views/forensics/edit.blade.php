@extends('layouts.app')
@section('content')

<!-- Start Banner Hero -->
<div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
        <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
            <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Edit Forensics</h1>
            
            <p class="banner-body pb-2 light-300">
                Please note you may not have access to all sections.
                Admin can authorise.
            </p>
            <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Incidents</button>
            <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Forensics</button>
        </div>
    </div>
</div>
<!-- End Banner Hero -->


    <div class="row">
        <div class="col-lg-12 margin-tb">
        
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('forensics.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('forensics.update',$forensic->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            
            <div class="form-group">
                <strong>Victim Name:{{ $forensic->incident->victim }}</strong>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Remarks:</strong>
                    <textarea class="form-control" style="height:150px" name="remarks" placeholder="Remarks">{{ $forensic->remarks }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Legal:</strong>
                    <textarea class="form-control" style="height:150px" name="legal" placeholder="Legal_Notes">{{ $forensic->legal }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Police:</strong>
                    <textarea class="form-control" style="height:150px" name="police" placeholder="Police_Notes">{{ $forensic->police }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Medical:</strong>
                    <textarea class="form-control" style="height:150px" name="medical" placeholder="Medical_Notes">{{ $forensic->medical }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <textarea class="form-control" style="height:150px" name="status" placeholder="Status">{{ $forensic->status }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <p class="text-center text-primary"><small>GBVRS</small></p>
@endsection