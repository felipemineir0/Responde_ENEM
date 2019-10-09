	
  jQuery(document).ready(function(){

  jQuery('.banner-home').slick({
  dots: true,
   arrows: true,
  autoplay: false,  
  infinite: true,
  fade:true,
  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1, 
});


if(jQuery(window).width() > 381){

var offsetElipse;
jQuery('.elipse-banner').each(function(){

  offsetElipse = jQuery(this).offset().left;

});

var finaloff = offsetElipse + 360;

jQuery('.slick-next').css('left',finaloff);

}

});