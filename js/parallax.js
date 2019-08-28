
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
  if (window.innerHeight < window.innerWidth && window.innerWidth < 1100) {
    screen.removeClass('dont_show');
    screen.addClass('show');
  }else{
    screen.removeClass('show');
    screen.addClass('dont_show');
  }
}



// PC background
window.onload = function () {

  var parallaxBox = document.getElementById ( 'box' );
  var c1left = document.getElementById ( 'l1' ).offsetLeft,
  c1top = document.getElementById ( 'l1' ).offsetTop,
  c2left = document.getElementById ( 'l2' ).offsetLeft,
  c2top = document.getElementById ( 'l2' ).offsetTop,
  c3left = document.getElementById ( 'l3' ).offsetLeft,
  c3top = document.getElementById ( 'l3' ).offsetTop,
  c4left = document.getElementById ( 'l4' ).offsetLeft,
  c4top = document.getElementById ( 'l4' ).offsetTop;
  
  parallaxBox.onmousemove = function ( event ) {
    event = event || window.event;
    var x = event.clientX - parallaxBox.offsetLeft,
    y = event.clientY - parallaxBox.offsetTop;
    
    mouseParallax ( 'l1', c1left, c1top, x, y, 0 );
    mouseParallax ( 'l2', c2left, c2top, x, y, 50 );
    mouseParallax ( 'l3', c3left, c3top, x, y, 100 );
    mouseParallax ( 'l4', c4left, c4top, x, y, 150 );
  }
  
}

function mouseParallax ( id, left, top, mouseX, mouseY, speed ) {
  var obj = document.getElementById ( id );
  var parentObj = obj.parentNode,
  containerWidth = parseInt( parentObj.offsetWidth ),
  containerHeight = parseInt( parentObj.offsetHeight );
  obj.style.left = left - ( ( ( mouseX - ( parseInt( obj.offsetWidth ) / 2 + left ) ) / containerWidth ) * speed ) + 'px';
  obj.style.top = top - ( ( ( mouseY - ( parseInt( obj.offsetHeight ) / 2 + top ) ) / containerHeight ) * speed ) + 'px';
}


//background for mobile
var layer1  = document.getElementById("layer1");
var layer2  = document.getElementById("layer2");
var layer3  = document.getElementById("layer3");
var layer4  = document.getElementById("layer4");

if (window.DeviceOrientationEvent) {
  window.addEventListener('deviceorientation', deviceOrientationHandler, true);
}

var deviceOrientationData;

function deviceOrientationHandler(e) {
  deviceOrientationData = e;
  
  layer1.style.webkitTransform = "translate("+ e.gamma*0 +"px," + e.beta*0 + "px)";
  layer1.style.transform = "translate("+ e.gamma*0 +"px," + e.beta*0 + "px)";
  
  layer2.style.webkitTransform = "translate("+ e.gamma*3 +"px," + e.beta*3 + "px)";
  layer2.style.transform = "translate("+ e.gamma*3 +"px," + e.beta*3 + "px)";
  
  layer3.style.webkitTransform = "translate("+ e.gamma*2 +"px," + e.beta*2 + "px)";
  layer3.style.transform = "translate("+ e.gamma*2 +"px," + e.beta*2 + "px)";

  layer4.style.webkitTransform = "translate("+ e.gamma*1 +"px," + e.beta*1 + "px)";
  layer4.style.transform = "translate("+ e.gamma*1 +"px," + e.beta*1 + "px)";
  
  console.log(e.alpha + ' : ' + e.beta + ' : ' + e.gamma);
};

//for team section
(function($){var a={},c="doTimeout",d=Array.prototype.slice;$[c]=function(){return b.apply(window,[0].concat(d.call(arguments)))};$.fn[c]=function(){var f=d.call(arguments),e=b.apply(this,[c+f[0]].concat(f));return typeof f[0]==="number"||typeof f[1]==="number"?this:e};function b(l){var m=this,h,k={},g=l?$.fn:$,n=arguments,i=4,f=n[1],j=n[2],p=n[3];if(typeof f!=="string"){i--;f=l=0;j=n[1];p=n[2]}if(l){h=m.eq(0);h.data(l,k=h.data(l)||{})}else{if(f){k=a[f]||(a[f]={})}}k.id&&clearTimeout(k.id);delete k.id;function e(){if(l){h.removeData(l)}else{if(f){delete a[f]}}}function o(){k.id=setTimeout(function(){k.fn()},j)}if(p){k.fn=function(q){if(typeof p==="string"){p=g[p]}p.apply(m,d.call(n,i))===true&&!q?o():e()};o()}else{if(k.fn){j===undefined?e():k.fn(j===false);return true}else{e()}}}})(jQuery);




$('#captions li').hover(function(){
  $(this).doTimeout( 'hover', 680, 'addClass', 'caption_single--hover' );
}, function(){
  $(this).doTimeout( 'hover', 250, 'removeClass', 'caption_single--hover' );
});
