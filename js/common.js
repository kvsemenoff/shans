

$(document).ready(function(){

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

 


     if (window.matchMedia("(min-width:992px)").matches) {   
        var demoTrigger = document.querySelector('#df-script-zoom');
        var paneContainer = document.querySelector('.df-third-box');

        new Drift(demoTrigger, {
          paneContainer: paneContainer,
          inlinePane: false
        });

    } else {
        return false;
    }

       
       
       

 });

    (function($){               
        jQuery.fn.lightTabs = function(options){

        var createTabs = function(){
            tabs = this;
            j = 0;
            
            showPage = function(j){
                // $(tabs).children("div").children("div").hide();
                // $(tabs).children("div").children("div").eq(i).show();
                $(tabs).children("#df-tab2").children("li").removeClass("active");
                $(tabs).children("#df-tab2").children("li").eq(j).addClass("active");
            }
                                
            showPage(0);                
            
            $(tabs).children("#df-tab2").children("li").each(function(index, element){
                $(element).attr("data-page", j);
                j++;                        
            });
            
            $(tabs).children("#df-tab2").children("li").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });             
        };      
        return this.each(createTabs);
        };  
        })(jQuery);
        $(document).ready(function(){
           
            $(".df-tab-second").lightTabs();           
        });     
