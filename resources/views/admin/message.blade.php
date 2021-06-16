@extends('admin.layout')

@section('title','Single Message')

@section('body')
<div class="container my-3">
    <div class="card">
        <div class="card-header">
            Email : {{$message->email}}
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>{{$message->message}}</p>
            <footer class="blockquote-footer">Message from <cite title="Source Title">{{$message->name}}</cite></footer>
            </blockquote>
        </div>
    </div>
</div>
@endsection
