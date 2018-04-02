$(document).ready(main);

var contador = 1;
var slide_counter = 1;
var texto;
var inicio = 1;
var inicio2 = 1;
var contador = 1;

function main(){
  $('.menu-bar').click(function(){
    if (contador == 1){
      $('nav').animate({
        left: '0'
      });
      contador = 0;
    } else {
      contador = 1;
      $('nav').animate({
        left: '-100%'
      });
    }
  });

}


$(".submenu").click(function(){
  $(this).children("ul").slideToggle();
})

$("ul").click(function(parameter){
  parameter.stopPropagation();
})

$(".slide-item").click(function(){
  max=$('#max-img').text();
  if (inicio == 1) {
    for (var i = inicio; i <= (inicio + 3) ; i++) {
      document.getElementById('gallery-src-' + i).src = "img/Gallery/gallery-" + i + ".jpg";
      $('.gallery-src-' + element).css('animation','transparencia 1s');
      $('.gallery-src-' + element).css('transition','all 0.5s');
      contador = i + 1;
      }
  }
  else if (inicio <= max){
    if((inicio2 + 3) > max){
      inicio = inicio - 3;
    }
    var element = 1;
  for (var i = inicio; i <= (inicio + 3) ; i++) {
    document.getElementById('gallery-src-' + element).src = "img/Gallery/gallery-" + i + ".jpg";
    $('.gallery-src-' + element).css('animation','transparencia 1s');
    $('.gallery-src-' + element).css('transition','all 0.5s');
    contador = i + 1;
    element = element + 1;
    }
    element = 1;
  } else {
    inicio = 1;
    contador = 1;
  }
  inicio = contador;
  inicio2 = inicio;
});



$('.animate-section-2').css('visibility', 'hidden');
$('.animate-section-2').waypoint(function(){
  $('.animate-section-2').css('visibility', 'visible');
  $('.animate-section-2').css('animation','bounceInLeft 2s');
},{
  offset: '50%'
});

$('.animate-section-3').css('visibility', 'hidden');
$('.animate-section-3').waypoint(function(){
  $('.animate-section-3').css('visibility', 'visible');
  $('.animate-section-3').css('animation','zoomInRight 1.5s');
},{
  offset: '60%'
});

$('.animate-section-4').css('visibility', 'hidden');
$('.animate-section-4').waypoint(function(){
  $('.animate-section-4').css('visibility', 'visible');
  $('.animate-section-4').css('animation','zoomInUp 1.5s');
},{
  offset: '80%'
});

$('.animate-section-5').css('visibility', 'hidden');
$('.animate-section-5').waypoint(function(){
  $('.animate-section-5').css('visibility', 'visible');
  $('.animate-section-5').css('animation','bounceInDown 1.5s');
},{
  offset: '80%'
});
