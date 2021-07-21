@extends('admin.layout')

@section('title','Login')

@section('head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('body')
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{ asset('images/settings.svg') }}" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form method="POST" action="/admin/login">
            @csrf
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">If Forgot Password Contact Web Team</a>
        </div>
    </div>
</div>
@endsection
