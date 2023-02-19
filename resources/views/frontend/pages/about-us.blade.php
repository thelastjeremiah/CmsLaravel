@extends('frontend.layouts.app')

@section('content')
  
  <section class="about-us">
    <div class="center-me">
      <p class="display-2 text-white  fw-bold Cormorant-Garamond text-uppercase text-center animate__animated animate__animated_duration_header_1 animate__fadeInUp">About  Us</p>
      <p class="Poppins text-white text-center animate__animated animate__animated_duration_header_2 animate__fadeInUp ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, vero minus esse itaque, adipisci perspiciatis quibusdam laboriosam at cupiditate veniam est molestias molestiae vel hic eligendi. Ab voluptates deserunt asperiores.</p>
    </div>
  </section>

  <section class="bg-main-color overflow-custom-hidden">
    <div class="container">
      <p class="fs-2 text-white  fw-bold Cormorant-Garamond text-uppercase  animate__animated animate__animated_duration_header_1 animate__fadeInUp">Our Team</p>

      <div class="row g-1 mx-5 mt-5">

        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-1.jpg') }}"  class="img-fluid animate__about_delay_1 animate__animated" id="about_image_delay_1">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> Rebekah N. Moore.</p>
        </div>
  
        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-2.jpg') }}"  class="img-fluid animate__about_delay_2 animate__animated" id="about_image_delay_2">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> William B. Rigdon.</p>
        </div>
  
        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-4.jpg') }}"  class="img-fluid animate__about_delay_3 animate__animated" id="about_image_delay_3">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> Rickey P. Boyer.</p>
        </div>
  
        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-5.jpg') }}"  class="img-fluid animate__about_delay_4 animate__animated" id="about_image_delay_4">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> Melisa J. Guerro.</p>
        </div>

        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-6.jpg') }}"  class="img-fluid animate__about_delay_5 animate__animated" id="about_image_delay_5">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> Elsie S. Easley.</p>
        </div>
  
        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-7.jpg') }}"  class="img-fluid animate__about_delay_6 animate__animated" id="about_image_delay_6">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> Mary J. Aaron.</p>
        </div>
  
        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-8.jpg') }}"  class="img-fluid animate__about_delay_7 animate__animated" id="about_image_delay_7">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> Keri R. Glidewell.</p>
        </div>
  
        <div class="col-sm-3 px-5 pt-5 pt-md-1">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('image/team-9.jpg') }}"  class="img-fluid animate__about_delay_8 animate__animated" id="about_image_delay_8">
          </div>
          <p class="Cormorant-Garamond text-white text-uppercase fs-4 pt-3"> Tracy R. Hernandez.</p>
        </div>


      </div>
    </div>
  </section>

  <section class="bg-main-color overflow-custom-hidden">
    <div class="container py-5 my-5">
      <p class="display-2 text-white  fw-bold Cormorant-Garamond text-uppercase text-center animate__about_delay_9 animate__animated" id="about_textbelow_delay_1">Delectus nemo qui rem </p>
      <p class="Poppins text-white text-center animate__about_delay_10 animate__animated" id="about_textbelow_delay_2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, vero minus esse itaque, adipisci perspiciatis quibusdam laboriosam at cupiditate veniam est molestias molestiae vel hic eligendi. Ab voluptates deserunt asperiores.</p>
    </div>
  </section>
@endsection


@section('custom-js')
  <script src="{{asset('js/frontend-about-us.js')}}"></script>
@endsection