@extends('frontend.layouts.app')

@section('content')

  <section class="blog-banner-single">
    <div class="center-me">
      <p class="display-2 text-white  fw-bold Cormorant-Garamond text-uppercase text-center animate__animated animate__animated_duration_header_1 animate__fadeInUp">{{ $Blogs -> title }}</p>
    </div>
  </section>

  <section class="bg-main-color">
    <div class="container">
      <div class="d-flex justify-content-center align-items-center py-3">
        <img src="{{ asset('uploads/blogs/' . $Blogs -> image) }}"  class="img-fluid">
      </div>

      <div class="d-flex justify-content-center align-items-center py-3">
        <div class="card-text text-white Poppins ">{!! $Blogs ->message !!}</div>
      </div>

    </div>
  </section>
  

@endsection

@section('custom-js')
  <script src="{{asset('js/frontend-main.js')}}"></script>
@endsection


