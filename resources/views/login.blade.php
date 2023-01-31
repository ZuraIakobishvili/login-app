@extends('layouts.app')

@section('title') Login @endsection

@section('content')

<h5> Back to <a href="{{ route('homepage') }}"> Home Page </a></h5><br>

@if(Session::has('message'))
  <span class="text-danger"> {{ Session::get('message')}} </span><br>
@endif
<br>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="email">
          @error('email')
            <span class="text-danger"> {{ $message }} </span>
          @enderror
        </div>

        <div class="mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="password">
          @error('password')
            <span class="text-danger"> {{ $message }} </span>
          @enderror
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
@endsection