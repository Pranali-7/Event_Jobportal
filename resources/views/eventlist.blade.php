@extends('master')
@section('content')

@if(session()->has('message'))
        <div class="alert alert-sm alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" arai-label="Close">
            <span aria-hidden="true"></span>
            </button>
            <strong>{{session()->get('message')}}</strong>
        </div>
@endif
<a href="addevent" class="btn btn-primary">
ADD New Event
</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Sr No:</th>
        <th>Organiser</th>
        <th>Email</th>
        <th>Venue</th>
        <th>Date:</th>
        <th>Image</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    @foreach($events as $event)
        <tr>
        <th>{{$event->id}}</th>
        <th>{{$event->organiser}}</th>
        <th>{{$event->email}}</th>
        <th>{{$event->venue}}</th>
        <th>{{$event->created_at}}</th>
        <th><img src="{{asset('images')}}/{{$event->image}}" style="width:100px"></th>
        <th><a href="updatevent/{{$event->id}}">Update</a></th>
        </tr>
      
      @endforeach
    </tbody>
  </table>

@endsection