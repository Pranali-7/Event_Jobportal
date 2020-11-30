@extends('master')
@section('content')
<div clas="custom">
<div>
    @if (session()->has('success'))
    <div class="alert alert-sm alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" arai-label="Close">
            <span aria-hidden="true"></span>
            </button>
            <strong>{{session()->get('success')}}</strong>
        </div>
        
    @endif
</div>

<div class="wrapper">
    <h3>Trending Products</h3>
    @foreach ($events as $event)
    <div class="Events-grid">
    <a href="detail/{{$event['id']}}">
      <img class="event-image" src="{{asset('images')}}/{{$event->image}}" >
      </a>
        <h5>Date:{{$event['created_at']}}</h5>
        <h5>Organization:{{$event['organiser']}}</h5>
        <h5>Email:{{$event['email']}}</h5>
        <h5>Venue:{{$event['venue']}}</h5>
        <h5>Link:{{$event['link']}}</h5>
      
    </div>
    @endforeach
</div>
</div>
@endsection