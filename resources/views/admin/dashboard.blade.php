@extends('admin.layout')

@section('title','Dashboard')

@section('body')
    <center>
        <h1>Hello Boss!</h1>
        <div class="container">
            <a type="button" class="btn btn-primary btn-lg btn-block" href="/admin/addEvent">Add Event</a>
            <a type="button" class="btn btn-warning btn-lg btn-block" href="/admin/updateEvent">Update/Delete Event Details</a>
            <a type="button" class="btn btn-secondary btn-lg btn-block" href="/admin/messages">Show Messages</a>
        </div>
    </center>
@endsection
