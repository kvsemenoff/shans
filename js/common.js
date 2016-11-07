

$(document).ready(function(){

  var owl = $(".dd-slider");
 
  owl.owlCarousel({

    loop:true,//Зацикливаем слайдер
    nav:true, //Навигация включена
    autoplay:false,//автозапуск
    smartSpeed:1000,//Время движения
    margin:0,
    navText:['<span class="prev-ars1"></span>','<span class="next-ars1"></span>'],
    responsive:{
        0:{
          items:1
        },
        380:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:1
        },
         1200:{
          items:1
        }
    }
     
  });
  

 });


