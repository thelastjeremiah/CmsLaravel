@extends('frontend.layouts.app')

@section('content')
  
  <section class="thankyou-banner">
    <div class="center-me">
      <p class="Cormorant-Garamond text-uppercase text-center text-white display-1 fw-bold animate__animated animate__animated_duration_header_1 animate__fadeInUp">thank you</p>
      <p class="Cormorant-Garamond text-uppercase text-center text-white display-5 animate__animated animate__animated_duration_header_2 animate__fadeInUp">For Reaching out we will do our best to get backk you </p>

      <a href="{{ url('/') }}" class="text-decoration-none">
        <p class="Poppins fw-bold text-center color-C89E70 fs-4 my-5 animate__image_delay_3 animate__animated animate__fadeInUp">Back To Home Page</p>
      </a>
    </div>
  </section>

@endsection
