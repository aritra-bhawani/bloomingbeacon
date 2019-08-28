

 $(document).ready(function(){
    var pp     = $("#pp"),
        bg     = $("#pp-bg"),
        close_pp     = $("#close_pp");

    function pp_hide(pp, bg, close_pp){
        pp.animate({top: "-200vh"}, 500, function(){bg.fadeOut(500);});
    }
    function pp_show(pp, bg, close_pp){
        if (window.innerWidth > 1100) {
            pp.animate({top: "10vh"}, 1000);
            bg.fadeIn(1000).click(function(){pp_hide(pp, bg, close_pp)});
            close_pp.fadeIn(1000).click(function(){pp_hide(pp, bg, close_pp)});
        }
        else{
            pp.animate({top: "27vh"}, 1000);
            bg.fadeIn(1000).click(function(){pp_hide(pp, bg, close_pp)});
            close_pp.fadeIn(1000).click(function(){pp_hide(pp, bg, close_pp)});
        }    
    }
 
    if ( $.cookie('visit') == undefined ){
        $.cookie('visit', true);
        pp_show(pp, bg, close_pp);
    } 
   else {
        /*$('body').append('<h1> </h1><a href="#" id="remove_cookie"></a>');*/
        $('#remove_cookie').click(function(e){
           e.preventDefault();
            $.removeCookie('visit');
           $(this).after("<span></span>").remove();
       });
       /*pp_show(pp, bg, close_pp);*/
    }
  
// When you click on the button, we set the cookie, which will prohibit the display
    // modal window
    document.getElementById('hide_popup').addEventListener('click', function() { 
            // We put a cookie for a minute.                
            var date = new Date(new Date().getTime() + 31449600000);
            document.cookie = "visit=yes; path=/; expires=" + date.toUTCString();

            // and immediately hide the window
            pp.animate({top: "-200vh"}, 500, function(){bg.fadeOut(500);})
        });
   
});