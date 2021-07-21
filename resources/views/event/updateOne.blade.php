@extends('admin.layout')

@section('title','Update Event')

@section('body')
    <div class="container my-3">
        <h1>Update Event</h1>
        <form method="POST" action="/admin/update/{{$main_event->id}}">
            @csrf
            <div class="form-group">
                <label for="ename">Event Name</label>
                <input type="text" class="form-control" id="ename" placeholder="Enter Event Name" name="ename" value="{{$main_event->name}}">
            </div>
            <div class="form-group">
                <label for="eprice">Event Price</label>
                <input class="form-control" id="eprice" rows="4" name="eprice" placeholder="price of the event" value="{{$main_event->price ?? 50}}" />
            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
@endsection
