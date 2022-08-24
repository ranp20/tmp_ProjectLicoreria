$(() => {
	var btn_optionsLinks_show = document.querySelector(".iconcustom-mburguerhome__show"),
			btn_optionsLinks_close = document.querySelector(".iconcustom-mburguerhome__close"),
			m_optionsLinks = btn_optionsLinks_show.nextElementSibling;
	btn_optionsLinks_show.addEventListener("click", function(){
		m_optionsLinks.classList.add("show");
	});
	btn_optionsLinks_close.addEventListener("click", function(){
		m_optionsLinks.classList.remove("show");
	});
	m_optionsLinks.addEventListener("click", function(e){
		if(e.target === m_optionsLinks){
			m_optionsLinks.classList.remove("show");	
		}
	});
});
$(document).ready(function(){
  var owl = $('.owl-carousel');
	owl.owlCarousel({
  	items:1,
  	lazyLoad:true,
    loop:true,
    autoplay:false,
    autoplayTimeout:6000,
		autoplayHoverPause:false,
    nav:false,
    dots:false,
    margin:10,
    responsiveClass:true,
    responsive:{
	    0:{
        items:1,
        loop:true,
        nav:false
	    },
	    600:{
        items:1,
        loop:true,
        nav:false
	    },
	    1000:{
        items:1,
        loop:true,
        nav:false
	    }
    }
	});
	$('.slider-arrow-left').click(function(){
    owl.trigger('prev.owl.carousel', [300]);
	});
  $('.slider-arrow-right').click(function(){
	  owl.trigger('next.owl.carousel', [300]);
	});
});