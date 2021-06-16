@extends('admin.layout')

@section('title','Messages from users')

@section('body')
    <div class="container">
    <div class="list-group my-3">
        @foreach ($messages as $message)
        @if ($loop->iteration%2 != 0)
            <a href="/admin/messages/{{$message->id}}" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$message->email}}</h5>
                    <small>{{$message->created_at->diffForHumans()}}</small>
                </div>
                <p class="mb-1">{{substr($message->message,0,256)}} ...</p>
                <small>{{$message->name}}</small>
            </a>
        @else
            <a href="/admin/messages/{{$message->id}}" class="list-group-item list-group-item-action flex-column align-items-start ">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$message->email}}</h5>
                    <small>{{$message->created_at->diffForHumans()}}</small>
                </div>
                <p class="mb-1">{{$message->message}}</p>
                <small>{{$message->name}}</small>
            </a>
        @endif
        @endforeach
        </div>
    </div>
@endsection
