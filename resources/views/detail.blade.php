@extends('master')
@section('content')
<div clas="container ">
    <div class="row">
        <div class="col-sm-6"> 
            <img  src="{{asset('images')}}/{{$event->image}}" style="height:300px;width:40%">
        </div> 
        
        <div class="col-sm-6"> 
            <a href="/">Go Back</a>
            <h2>Organization:{{$event['oraganiser']}}</h2>
            <h3>Email: {{$event['email']}}</h3>
            <h4>Venue: {{$event['venue']}}</h4>
            <h4>Link: {{$event['link']}}</h4>
            <h4>Date:{{$event['created_at']}}</h4>
            <br><br>
        </div> 
    </div>
</div>
@endsection