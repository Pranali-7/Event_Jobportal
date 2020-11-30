@extends('master')
@section('content')


<div clas="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1>Add Event Page</h1>
            <form action="/editEvent/{{$events->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">    
                
                <label >Organiser:</label>
                <input type="text" name="organiser" class="form-control"  placeholder="Enter Organiser Name" value="{{$events->organiser}}">
            </div>
            <div class="form-group">
                <label>Venue:</label>
                <input type="text" name="venue" class="form-control"  placeholder="Enter Venue" value="{{$events->venue}}">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="text"  name="email" class="form-control"  placeholder="Enter Email" value="{{$events->email}}">
            </div>
            <div class="form-group">
                <label>Link:</label>
                <input type="text" name="link" class="form-control"  placeholder="Enter Link" value="{{$events->link}}">
            </div>
            
            <div class="form-group">
                <label>Upload Image:</label>
                <input type="file" name="image" class="form-control"  placeholder="Enter Link" value="{{$events->image}}">
            </div>
        
            <button type="submit" class="btn btn-primary">Update Event</button>
            </form>
        </div>
    </div>
</div>

@endsection