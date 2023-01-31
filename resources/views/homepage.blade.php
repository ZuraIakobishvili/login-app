@extends('layouts.app')

@section('title') HomePage @endsection
@section('content')

<h1> Welcome To Home Page</h1>

<div>
    <div style="font-size:30px">
        <a style="margin-right: 10px;" href="{{ route('index') }}">Login</a>
        <a style="text-decoration:none" href="{{ route('register') }}">Registration</a>
    </div>
</div>
@endsection