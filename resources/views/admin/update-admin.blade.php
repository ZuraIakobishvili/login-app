@extends('layouts.app')

@section('title') Update Admin @endsection

@section('content')

<h4> Back to <a href="{{ route('admins') }}">Admins Page </a></h4><br>
    <form action="{{ route('admin.update', $admin->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $admin->name }}">
            @error('name')
              <span class="text-danger"> {{ $message }} </span>
            @enderror
          </div>

        <div class="mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ $admin->email }}">
          @error('email')
            <span class="text-danger"> {{ $message }} </span>
          @enderror
        </div>

        <div class="mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ $admin->password }}">
          @error('password')
            <span class="text-danger"> {{ $message }} </span>
          @enderror
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
@endsection