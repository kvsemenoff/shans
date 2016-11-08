

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
  

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });



$(".az-select").click(function(){
    $(this).find('.az-options').slideToggle(0);
    $(this).toggleClass('az-select-focus');
});


// tabs on cosmetic.php
$('.df-tab-first ul li').click(function(e) {
    e.preventDefault();
    $('.df-tab-first li').removeClass('active');
    $(this).addClass('active');
    var tab = $(this).attr('href');
    $('.tab').not(tab).css({'display':'none'});
    $(tab).fadeIn(400);
});
$('.df-tab-second ul li').click(function(e) {
    e.preventDefault();
    $('.df-tab-second li').removeClass('active');
    $(this).addClass('active');
    var tab = $(this).attr('href');
    $('.tab').not(tab).css({'display':'none'});
    $(tab).fadeIn(400);
});


//zoom on hover goods.php
if (window.matchMedia("(min-width:992px)").matches) {   
    var demoTrigger = document.querySelector('#df-script-zoom');
    var paneContainer = document.querySelector('.df-third-box');

    new Drift(demoTrigger, {
      paneContainer: paneContainer,
      inlinePane: false
    });
}

});



    // (function($){               
    //     jQuery.fn.lightTabs = function(options){

    //     var createTabs = function(){
    //         tabs = this;
    //         j = 0;
            
    //         showPage = function(j){
    //              //$(tabs).children("div").children("div").hide();
    //              //$(tabs).children("div").children("div").eq(i).show();
    //             $(tabs).children("ul").children("li").removeClass("active");
    //             $(tabs).children("ul").children("li").eq(j).addClass("active");
    //         }
                                
    //         showPage(0);                
            
    //         $(tabs).children("ul").children("li").each(function(index, element){
    //             $(element).attr("ul", j);
    //             j++;                        
    //         });
            
    //         $(tabs).children("ul").children("li").click(function(){
    //             showPage(parseInt($(this).attr("data-page")));
    //         });             
    //     };      
    //     return this.each(createTabs);
    //     };  
    //     })(jQuery);
       
