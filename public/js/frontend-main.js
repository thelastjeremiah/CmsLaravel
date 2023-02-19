$(document).ready(function(){

  $(window).scroll(function(){

    var positiontop = $(document).scrollTop();
    console.log(positiontop);

    if((positiontop > 400 )){
      $('#image_delay_1').addClass('animate__fadeInUp');
      $('#image_delay_2').addClass('animate__fadeInUp');
      $('#image_delay_3').addClass('animate__fadeInUp');
    }

    if((positiontop > 1135 )){
      $('#image_slide_left_1').addClass('animate__slideInLeft');
      $('#image_slide_right_1').addClass('animate__slideInRight');
      $('#image_slide_left_2').addClass('animate__slideInLeft');
      $('#image_slide_right_2').addClass('animate__slideInRight');
    }

    if((positiontop > 2450 )){
      $('#sale_coffee').addClass('animate__fadeInUp');
    }

    if((positiontop > 3373 )){
      $('#blog_list').addClass('animate__fadeInUp');
    }

  })

})