@extends('layouts.app')
@section('content')
    


    <form action="{{ route('football.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
          @error('name')
            <span class="text-danger"> {{ $message }} </span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
          @error('email')
            <span class="text-danger"> {{ $message }} </span>
          @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="club" class="form-label">Club</label>
            <input type="text" class="form-control" id="club" name="club">
            @error('club')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country">
            @error('country')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection