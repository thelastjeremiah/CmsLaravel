@extends('frontend.layouts.app')

@section('content')
  

  <section class="bg-main-color overflow-custom-hidden">

    <div  class="d-flex justify-content-center px-5 pt-5">
      <h1 class="Cormorant-Garamond text-white text-center display-4 animate__animated animate__fadeInUp">Contact Us.</h1>
    </div>

    <div class="animate__animated  animate__fadeIn">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15837.959402664237!2d125.6197942!3d7.0690623!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb6c88af8d98880f!2sPiapi%20Public%20Market!5e0!3m2!1sen!2sph!4v1661850965267!5m2!1sen!2sph" width="100%" height="450" style="border:0;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
    </div>
    
    
    

    <div class="d-flex justify-content-center my-5">
      <form action="{{url('send-mail')}}" method="POST" class="animate__animated animate__fadeInUp"> @csrf
        <div class="row">

          <div class="col-12">
            <label class="form-label text-white Poppins fs-4">Email</label>
            <input type="email"  name="email" id="email" class="form-control mb-4" >
          </div>

          <div class="col-12">
            <label class="form-label text-white Poppins fs-4">Message</label>
            <textarea class="from-control w-100" name="message" id="message" ></textarea>
          </div>

        </div>
        <button type="submit" class="btn btn-color-custom Roboto text-white  text-uppercase  mt-5">submit</button>
      </form>
    </div>
    
  </section>

@endsection


