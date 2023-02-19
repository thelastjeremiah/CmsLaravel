$(document).ready(function(){

  $(window).scroll(function(){

    var positiontop = $(document).scrollTop();
    console.log(positiontop);


    if((positiontop > 300 )){
      $('#blogs').addClass('animate__fadeInUp');
    }

  })

})