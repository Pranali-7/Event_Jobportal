@extends('master')
@section('content')


<div clas="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1>Add Event Page</h1>
            <form action="/add" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            @if ($errors->has('organiser'))
                    <span class="text-danger">{{ $errors->first('organiser') }}</span>
                @endif
                <label >Organiser:</label>
                <input type="text" name="organiser" class="form-control"  placeholder="Enter Organiser Name" >
            </div>
            <div class="form-group">
            @if ($errors->has('venue'))
                    <span class="text-danger">{{ $errors->first('venue') }}</span>
                @endif
                <label>Venue:</label>
                <input type="text" name="venue" class="form-control"  placeholder="Enter Venue">
            </div>
            <div class="form-group">
            @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <label>E-mail</label>
                <input type="text"  name="email" class="form-control"  placeholder="Enter Email">
            </div>
            <div class="form-group">
            @if ($errors->has('link'))
                    <span class="text-danger">{{ $errors->first('link') }}</span>
                @endif
                <label>Link:</label>
                <input type="text" name="link" class="form-control"  placeholder="Enter Link">
            </div>
            
            <div class="form-group">
            @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
                <label>Upload Image:</label>
                <input type="file" name="image" class="form-control"  placeholder="Enter Link">
            </div>

            <button type="submit" class="btn btn-primary">Add Event</button>
            </form>
        </div>
    </div>
</div>

@endsection