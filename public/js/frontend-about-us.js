$(document).ready(function(){

  $(window).scroll(function(){

    var positiontop = $(document).scrollTop();
    console.log(positiontop);

    if((positiontop > 400 )){
      $('#about_image_delay_1').addClass('animate__fadeInUp');
      $('#about_image_delay_2').addClass('animate__fadeInUp');
      $('#about_image_delay_3').addClass('animate__fadeInUp');
      $('#about_image_delay_4').addClass('animate__fadeInUp');
    }

    if((positiontop > 600 )){
      $('#about_image_delay_5').addClass('animate__fadeInUp');
      $('#about_image_delay_6').addClass('animate__fadeInUp');
      $('#about_image_delay_7').addClass('animate__fadeInUp');
      $('#about_image_delay_8').addClass('animate__fadeInUp');
    }
    
    if((positiontop > 800 )){
      $('#about_textbelow_delay_1').addClass('animate__fadeInUp');
      $('#about_textbelow_delay_2').addClass('animate__fadeInUp');
    }

  })

  
})