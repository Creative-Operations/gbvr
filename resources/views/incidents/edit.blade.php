@extends('layouts.app')
@section('content')

<!-- Start Banner Hero -->
<div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
        <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
            <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Edit Incident</h1>
            
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
                <a class="btn btn-primary" href="{{ route('incidents.index') }}"> Back</a>
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
    <form action="{{ route('incidents.update',$incident->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Survivor Name:</strong>
                    <input type="text" name="victim" value="{{ $incident->victim }}" class="form-control" placeholder="Victim Name">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile:</strong>
                    <input type="text" name="mobile" value="{{ $incident->mobile }}" class="form-control" placeholder="Mobile">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location:</strong>
                    <input type="text" name="location" value="{{ $incident->location }}" class="form-control" placeholder="Location">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $incident->address }}" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Violation Type:</strong>
                    <strong>Choose a Violation Type:</strong>
                    <select id="attack_type" name="attack_type">
                        @if($incident->attack_type)
                        <option value="{{$incident->attack_type}}" selected>{{$incident->attack_type}}</option>
                        <option value="Rape">Rape</option>
                        <option value="Defilement">Defilement</option>
                        <option value="Sodomy">Sodomy</option>
                        <option value="Incest">Incest</option>
                        <option value="Attempted Rape">Attempted Rape</option>
                        <option value="Physical Assault">Physical Assault</option>
                        <option value="Verbal Assault">Verbal Assault</option>
                        <option value="Other">Other</option>
                        @endif
                    </select>
                      <input type="text" name="other" value="" class="form-control" placeholder="Other">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Violator:</strong>
                    <input type="text" name="attacker" value="{{ $incident->attacker }}" class="form-control" placeholder="Name/Unknown">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $incident->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <p class="text-center text-primary"><small>GBVRS</small></p>
@endsection