///background dots
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 50,
      "density": {
        "enable": true,
        "value_area": 1000
      }
    },
    "color": {
      "value": "#AAB7B8"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": .8,
        "color": "#000"
      },
      
    },
    "opacity": {
      "value": 0.7,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 8,
        "opacity_min": 0.1,
        "sync": false
      }
    },

    "size": {
      "value": 10.5,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 20,
        "size_min": 0.2,
        "sync": false
      }
    },

    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#000000",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 3,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": true,
      "attract": {
        "enable": true,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },

  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "grab"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": false
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 2
        }
      },
      "bubble": {
        "distance": 200,
        "size": 20,
        "duration": 5,
        "opacity": 5,
        "speed": 3
      },
      "repulse": {
        "distance": 300,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 6
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": false
});


//for mobile nab-bar
$('document').ready(function () {
    var trigger = $('#hamburger'),
        isClosed = true,
        sidenav = $('#side-menu');

    trigger.click(function () {
      burgerTime();
    });

    function burgerTime() {
      if (isClosed == true) {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        sidenav.removeClass('closed');
        sidenav.addClass('opened');
        isClosed = false;
      } else {
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        sidenav.removeClass('opened');
        sidenav.addClass('closed');
        isClosed = true;
      }
    }

  });

//for portrait & landscape
var screen = $('#screen');
window.onresize = function (event) {
  applyOrientation();
}

function applyOrientation() {
  if ($(window).height() < ($(window).width()-400) && $(window).width() < 1100) {
    screen.removeClass('dont_show');
    screen.addClass('show');
  }else{
    screen.removeClass('show');
    screen.addClass('dont_show');
  }
}


//for team section
(function($){var a={},c="doTimeout",d=Array.prototype.slice;$[c]=function(){return b.apply(window,[0].concat(d.call(arguments)))};$.fn[c]=function(){var f=d.call(arguments),e=b.apply(this,[c+f[0]].concat(f));return typeof f[0]==="number"||typeof f[1]==="number"?this:e};function b(l){var m=this,h,k={},g=l?$.fn:$,n=arguments,i=4,f=n[1],j=n[2],p=n[3];if(typeof f!=="string"){i--;f=l=0;j=n[1];p=n[2]}if(l){h=m.eq(0);h.data(l,k=h.data(l)||{})}else{if(f){k=a[f]||(a[f]={})}}k.id&&clearTimeout(k.id);delete k.id;function e(){if(l){h.removeData(l)}else{if(f){delete a[f]}}}function o(){k.id=setTimeout(function(){k.fn()},j)}if(p){k.fn=function(q){if(typeof p==="string"){p=g[p]}p.apply(m,d.call(n,i))===true&&!q?o():e()};o()}else{if(k.fn){j===undefined?e():k.fn(j===false);return true}else{e()}}}})(jQuery);




$('#captions li').hover(function(){
  $(this).doTimeout( 'hover', 680, 'addClass', 'caption_single--hover' );
}, function(){
  $(this).doTimeout( 'hover', 250, 'removeClass', 'caption_single--hover' );
});


//for parallx of 'our team'
/*$(window).scroll(function(){
    parallax();
})

function parallax(){
  var wScroll = $(window).scrollTop();
  $('.our_team').css('padding-top', (10 -(wScroll*1.1))+'vh')
  console.log( wScroll)
}
*/
