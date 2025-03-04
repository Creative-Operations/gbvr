@extends('layouts.app')
@section('content')

<style>


body{margin-top:20px;}

.card-big-shadow {
    max-width: 320px;
    position: relative;
}

.coloured-cards .card {
    margin-top: 30px;
}

.card[data-radius="none"] {
    border-radius: 0px;
}
.card {
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}


.card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
    color: #FFFFFF;
}
.card.card-just-text .content {
    padding: 50px 65px;
    text-align: center;
}
.card .content {
    padding: 20px 20px 10px 20px;
}
.card[data-color="blue"] .category {
    color: #7a9e9f;
}

.card .category, .card .label {
    font-size: 14px;
    margin-bottom: 0px;
}
.card-big-shadow:before {
    background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}
h4, .h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}
h6, .h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}
.card .description {
    font-size: 16px;
    color: #66615b;
}
.content-card{
    margin-top:30px;    
}
a:hover, a:focus {
    text-decoration: none;
}

/*======== COLORS ===========*/
.card[data-color="blue"] {
    background: #b8d8d8;
}
.card[data-color="blue"] .description {
    color: #506568;
}

.card[data-color="green"] {
    background: #d5e5a3;
}
.card[data-color="green"] .description {
    color: #60773d;
}
.card[data-color="green"] .category {
    color: #92ac56;
}

.card[data-color="yellow"] {
    background: #ffe28c;
}
.card[data-color="yellow"] .description {
    color: #b25825;
}
.card[data-color="yellow"] .category {
    color: #d88715;
}

.card[data-color="brown"] {
    background: #d6c1ab;
}
.card[data-color="brown"] .description {
    color: #75442e;
}
.card[data-color="brown"] .category {
    color: #a47e65;
}

.card[data-color="purple"] {
    background: #baa9ba;
}
.card[data-color="purple"] .description {
    color: #3a283d;
}
.card[data-color="purple"] .category {
    color: #5a283d;
}

.card[data-color="orange"] {
    background: #ff8f5e;
}
.card[data-color="orange"] .description {
    color: #772510;
}
.card[data-color="orange"] .category {
    color: #e95e37;
}
</style>

<!-- Search -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Investigations</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('forensics.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="container bootstrap snippets bootdeys">
    <div class="row">

        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big-shadow">
                <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                    <div class="content">
                        <h6 class="category">Orange Card</h6>
                        <h4 class="title"> Victim Name</h4>
                        <p class="description">{{ $forensic->id }}:{{ $forensic->incident->victim }} </p>
                        <p class="description"> {{ $forensic->updated_at }} </p>
                       
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big-shadow">
                <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                    <div class="content">
                        <h6 class="category">Blue Card</h6>
                        <h4 class="title">Medical Report</h4>
                        <p class="description">{{ $forensic->medical }} </p>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big-shadow">
                <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                    <div class="content">
                        <h6 class="category">Green Card</h6>
                        <h4 class="title">Investigation Status</h4>
                        <p class="description">{{ $forensic->status }} </p>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big-shadow">
                <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                    <div class="content">
                        <h6 class="category">Yellow Card</h6>
                        <h4 class="title">Legal Report</a></h4>
                        <p class="description">{{ $forensic->legal }} </p>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big-shadow">
                <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                    <div class="content">
                        <h6 class="category">Brown Card</h6>
                        <h4 class="title">Police Report</h4>
                        <p class="description">{{ $forensic->police }} </p>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big-shadow">
                <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                    <div class="content">
                        <h6 class="category">Purple Card</h6>
                        <h4 class="title">Remarks</h4>
                        <p class="description">{{ $forensic->remarks }} </p>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
    </div>
  
@endsection
<p class="text-center text-primary"><small>GBVRS</small></p>