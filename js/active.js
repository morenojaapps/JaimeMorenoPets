$(document).ready(main);

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
