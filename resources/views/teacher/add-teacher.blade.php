@extends('layouts.app')

@section('title') Add Teacher @endsection

@section('content')

<h5> Back to<a  href="{{ route('dashboard') }}"> Dashboard </a></h5><br>
    <form action="{{ route('teacher.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
            @error('name')
              <span class="text-danger"> {{ $message }} </span>
            @enderror
          </div>

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