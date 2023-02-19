@extends('frontend.layouts.app')

@section('content')

  <section class="blog-banner">
    <div class="center-me">
      <p class="display-2 text-white  fw-bold Cormorant-Garamond text-uppercase text-center animate__animated animate__animated_duration_header_1 animate__fadeInUp">Blogs</p>
    </div>
  </section>

  <section class="bg-main-color">

    <div class="container">
      <div class="row animate_blogs animate__animated" id="blogs">
        @if (count($Blogs) == 0)
          <h1 class="Cormorant-Garamond text-uppercase text-white text-center py-4"> no latest post</h1>
        @else
          @foreach ($Blogs as $Blog)
            <div class="col-sm-3 d-flex justify-content-center align-items-center my-5 my-md-3">
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
    
  </section>



@endsection

@section('custom-js')
  <script src="{{asset('js/frontend-blogs.js')}}"></script>
@endsection


