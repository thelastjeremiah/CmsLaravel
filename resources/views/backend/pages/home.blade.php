@extends('backend.layouts.app')

@section('content')

  {{-- <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            {{ __('You are logged in!') }}
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="custom-container">
    <div class="d-flex justify-content-between align-items-center">
      
      <div class="mx-5">
        <div class="d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-user display-1"></i>
        </div>
        <a href="{{ url('/admin/index') }}" class="text-decoration-none">
          <p class="text-upper case mt-2 fs-2 text-black">User List</p>
        </a>
      </div>

      <div class="mx-5">
        <div class="d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-message display-1"></i>
        </div>
        <a href="{{ url('/blog/index') }}" class="text-decoration-none">
          <p class="text-upper case mt-2 fs-2 text-black">Blog List</p>
        </a>
      </div>

      <div class="mx-5">
        <div class="d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-envelope display-1"></i>  
        </div>
        <a href="{{ url('/email/index') }}" class="text-decoration-none">
          <p class="text-upper case mt-2 fs-2 text-black">Email List</p>
        </a>
      </div>

    </div>
  </div>
@endsection
