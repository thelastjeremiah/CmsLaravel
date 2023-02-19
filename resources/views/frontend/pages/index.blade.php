@extends('frontend.layouts.app')

@section('content')

  <section class="main-banner">
    <div class="center-me">
      <p class="display-2 text-white  fw-bold Cormorant-Garamond text-uppercase text-center animate__animated animate__animated_duration_header_1 animate__fadeInUp">Enjoy Your</p>
      <p class="display-2 text-white  fw-bold Cormorant-Garamond text-uppercase text-center animate__animated animate__animated_duration_header_2 animate__fadeInUp ">Morning Coffee</p>

      <p class="Poppins text-white text-center animate__animated animate__animated_duration_header_2 animate__fadeInUp ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, vero minus esse itaque, adipisci perspiciatis quibusdam laboriosam at cupiditate veniam est molestias molestiae vel hic eligendi. Ab voluptates deserunt asperiores.</p>
      
      <div class="d-flex justify-content-center pt-5">
        <button type="button" class="btn btn-color-custom Cormorant-Garamond text-white fw-bold text-uppercase fs-4 animate__animated animate__animated_duration_header_2 animate__fadeInUp ">show me coffee</button>
      </div>
      
    </div>
  </section>

  <section class="bg-main-color overflow-custom-hidden">
    
    <div class="row g-1 mx-5">

      <div class="col-sm-4 px-5 pt-5 pt-md-1">
        <p class="Cormorant-Garamond text-white text-uppercase fs-4"> adipisicing elit.</p>
        <div class="d-flex justify-content-center">
          <img src="{{ asset('image/coffee-1.jpg') }}"  class="img-fluid animate__image_delay_1 animate__animated" id="image_delay_1">
        </div>
        <p class="Poppins text-white pt-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci modi quidem nisi ut aliquid voluptatum earum provident excepturi suscipit!</p>
      </div>

      <div class="col-sm-4 px-5 pt-5 pt-md-1">
        <p class="Cormorant-Garamond text-white text-uppercase fs-4">  consec adipisicing.</p>
        <div class="d-flex justify-content-center">
          <img src="{{ asset('image/coffee-2.jpg') }}"  class="img-fluid animate__image_delay_2 animate__animated" id="image_delay_2">
        </div>
        <p class="Poppins text-white pt-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci modi quidem nisi ut aliquid voluptatum earum provident excepturi suscipit!</p>
      </div>

      <div class="col-sm-4 px-5 pt-5 pt-md-1">
        <p class="Cormorant-Garamond text-white text-uppercase fs-4"> numquam obcaecati</p>
        <div class="d-flex justify-content-center">
          <img src="{{ asset('image/coffee-3.jpg') }}"  class="img-fluid animate__image_delay_3 animate__animated" id="image_delay_3">
        </div>
        <p class="Poppins text-white pt-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci modi quidem nisi ut aliquid voluptatum earum provident excepturi suscipit!</p>
      </div>


    </div>
  </section>

  <section class="bg-main-color overflow-custom-hidden">
    <div class="py-5 px-5">
      <div class="d-flex justify-content-center pt-5">
        <h1 class="display-1 text-white  Cormorant-Garamond">Lorem Ipsum</h1>
      </div>
  
      <div  class="d-flex justify-content-center px-5">
        <p class="Poppins text-white text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Necessitatibus, vero minus esse itaque, adipisci.</p>
      </div>  


      <div class="row g-1 ">

        <div class="col-6">
          <div class="d-flex justify-content-end"> 
            <img src="{{ asset('image/box-image-1.jpg') }}"  class="img-fluid w-75 animate__animated" id="image_slide_left_1">
          </div>
        </div>

        <div class="col-6">
          <img src="{{ asset('image/box-image-2.jpg') }}"  class="img-fluid w-75 animate__animated" id="image_slide_right_1">
        </div>

        <div class="col-6">
          <div class="d-flex justify-content-end"> 
            <img src="{{ asset('image/box-image-3.jpg') }}"  class="img-fluid w-75 animate_slide_delay animate__animated" id="image_slide_left_2">
          </div>
        </div>

        <div class="col-6">
          <img src="{{ asset('image/box-image-4.jpg') }}"  class="img-fluid w-75 animate_slide_delay animate__animated" id="image_slide_right_2">
        </div>

      </div>

    </div>
  </section>
  
  <section class="bg-main-color overflow-custom-hidden">
    <div class="py-5">
      <div class="d-flex justify-content-center pt-5">
        <h1 class="display-6 text-white  Cormorant-Garamond text-uppercase text-center">enim at deleniti minus recusandae</h1>
      </div>

      <div class="row g-1 mt-5 animate__coffee animate__animated " id="sale_coffee">

        <div class="col-sm-3">
          <div class="d-flex justify-content-center px-5">
            <img src="{{ asset('image/order-coffee-1.jpg') }}"  class="img-fluid" >
          </div>
          <p class="text-white text-center pt-5 text-uppercase  Cormorant-Garamond fs-5">consectetur adipisicing elit.</p>
          <p class="text-white text-center text-uppercase  Cormorant-Garamond fs-3 fw-bold"> ₱ 150</p>
        </div>

        <div class="col-sm-3">
          <div class="d-flex justify-content-center px-5">
            <img src="{{ asset('image/order-coffee-2.jpg') }}"  class="img-fluid" >
          </div>
          <p class="text-white text-center pt-5 text-uppercase  Cormorant-Garamond fs-5">consectetur adipisicing elit.</p>
          <p class="text-white text-center text-uppercase  Cormorant-Garamond fs-3 fw-bold"> ₱ 150</p>
        </div>

        <div class="col-sm-3">
          <div class="d-flex justify-content-center px-5">
            <img src="{{ asset('image/order-coffee-2.jpg') }}"  class="img-fluid" >
          </div>
          <p class="text-white text-center pt-5 text-uppercase  Cormorant-Garamond fs-5">consectetur adipisicing elit.</p>
          <p class="text-white text-center text-uppercase  Cormorant-Garamond fs-3 fw-bold"> ₱ 150</p>
        </div>

        <div class="col-sm-3">
          <div class="d-flex justify-content-center px-5">
            <img src="{{ asset('image/order-coffee-1.jpg') }}"  class="img-fluid" >
          </div>
          <p class="text-white text-center pt-5 text-uppercase  Cormorant-Garamond fs-5">consectetur adipisicing elit.</p>
          <p class="text-white text-center text-uppercase  Cormorant-Garamond fs-3 fw-bold"> ₱ 150</p>
        </div>

      </div>
    </div>
  </section>

  <section class="bg-main-color overflow-custom-hidden">
    <div class="py-5">

      <div class="container animate__blog animate__animated" id="blog_list">
        <h1 class="display-1 text-white  Cormorant-Garamond text-center py-3">Blogs</h1>

        <div class="row">

          @if (count($Blogs) == 0)
            <h1 class="Cormorant-Garamond text-uppercase text-white text-center py-4"> no latest post</h1>
          @else
            @foreach ($Blogs as $Blog)
              <div class="col-sm-4 d-flex justify-content-center align-items-center my-5 my-md-3">

                <div class="card card-width card-border card-radius">
                  <img src="{{ asset('uploads/blogs/' . $Blog->image) }}"  class="img-fluid">
                  <div class="card-body bg-1C1815">
                    <p class="text-white Poppins color-C89E70-important card-fs">{{ $Blog -> title }}</p>
                    <p class="text-white Poppins color-C89E70-important card-fs">{{ date("j F Y", strtotime($Blog->updated_at)) }}</p>
                    <p class="text-white Poppins card-fs color-C89E70-important">Written by: <span class="text-white">{{ $Blog -> author }}</span>  </p>
                    <div class="card-text text-white Poppins card-fs">{!!Str::limit($Blog->message, 80, $end='.......')!!}</div>

                    <a class="card-fs text-uppercase Poppins text-decoration-none  color-C89E70-important" href="{{ url('blog-single/' . $Blog->id) }}">ReadMore</a>

                  </div>
                </div>

              </div>
            @endforeach
          @endif

        </div>

      </div>
    </div>
  </section>

@endsection

@section('custom-js')
  <script src="{{asset('js/frontend-main.js')}}"></script>
@endsection


