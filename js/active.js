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
