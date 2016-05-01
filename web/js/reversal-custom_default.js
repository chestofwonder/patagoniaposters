/*********************/
/*
/*	IE 10 Browser fixing	
/*
/*********************/

var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);


/*********************/
/*
/*	WINDOW.LOAD FUNCTION	
/*
/*********************/

	
	$(window).load(function(){			 
		$('#load').fadeOut().remove();
		$(window).trigger( 'hashchange' );
		$(window).trigger( 'resize' );
		
		/* STICKY NAVIGATION */
		$("nav").sticky({ topSpacing: 0, className: 'sticky', wrapperClassName: 'main-menu-wrapper' });	
	
	
		/* TEXT FITTING */ 	    
		$('.home-slide-content').fitText(1.2);		
		$('.fittext-content').fitText(1.4);
		
	
	});
	// END OF WINDOW.LOAD FUNCTION



/*********************/
/*
/*  Single Background Video 
/*	
/*********************/


var ScrolleFullImage = function(){
	var winHeight = $(window).height();
	$("#home").css({height:winHeight});  
}



/*********************/
/*
/*		Pie Initialize
/*
/*********************/

jQuery(document).ready(function(){

ScrolleFullImage();
	jQuery('#chart-show').bind('inview', function (event, visible) {
	var c=jQuery(this).css('color');
	
	if(jQuery('.pie').length)
	{
	 
		jQuery('.pie').easyPieChart({
			barColor:c,
			trackColor: '#dadada',
			scaleColor: false,
			lineWidth:15,
			animate: 5000,
			onStep: function(value) {
				this.$el.find('span').text(~~value+1);
			}
		});
	}
    });
	/* Modal browser problem solved */ 	 
	$('.close').click(function () {
		$('.modal-backdrop').remove();
		$('.modal-scrollable').css("z-index",'0');
		$('.modal-scrollable').css("display",'none');
		
	});
	
});	



/*********************/
/*
/*  	Team Single Pie1 Initialize
/*
/*********************/

jQuery(document).ready(function(){
	
	if(jQuery('.pie1').length)
	{
		jQuery('.pie1').easyPieChart1({
			barColor:'#ffd737',
			trackColor: '#dadada',
			scaleColor: false,
			lineWidth:15,
			animate: 5000,
			onStep: function(value) {
				this.$el.find('span').text(~~value+1);
			}
		});
	}
	

});	

/*********************/
/*
/*  	Document Ready Function
/*
/*********************/
	
	
jQuery(document).ready(function() {
	
		

	/* Responsive Menu Toggle function (nav li a) */	
	$('nav li a').on('click',function(){
		$('.navbar-collapse.in').collapse('hide');
	})
	
	
	/* Super Fish Menu */			
      $('ul.sf-menu a').smoothScroll();
	  $('#nav').onePageNav({
		scrollSpeed: 100,
		scrollOffset: 0
	});
  

	/* COLOR Style switcher */  
     
	$('.swtch-opener').click(function(e){
	  if($('#style-switcher').hasClass('swclose'))
	  {
	  	$('#style-switcher').removeClass('swclose');
	  	$('#style-switcher').addClass('swopen');
	  }
	  else
	  {
		$('#style-switcher').removeClass('swopen');
	  	$('#style-switcher').addClass('swclose');
	  }
	e.preventDefault();
	});

	
	if($.cookie("css")) {
	$('link[id="clrswitch"]').attr("href",$.cookie("css"));
	}
	
	$('.ul-colors li').click(function(){
	color=($(this).attr('id'));
	if(color=='color1')
	{	
		$('link[id="clrswitch"]').attr('href','css/color.css');
		$.cookie('css', 'css/color.css', { expires: 1 });
	}
	else if(color=='color2')
	{
		$('link[id="clrswitch"]').attr('href','css/color_blue.css');
		$.cookie('css', 'css/color_blue.css', { expires: 1 });
	}
	else if(color=='color3')
	{
		$('link[id="clrswitch"]').attr('href','css/color_green.css');
		$.cookie('css', 'css/color_green.css', { expires: 1 });
	}
	else if(color=='color4')
	{
		$('link[id="clrswitch"]').attr('href','css/color_orange.css');
		$.cookie('css', 'css/color_orange.css', { expires: 1 });
	}
	else if(color=='color5')
	{
		$('link[id="clrswitch"]').attr('href','css/color_pink.css');
		$.cookie('css', 'css/color_pink.css', { expires: 1 });
	}	
	else if(color=='color6')
	{
		$('link[id="clrswitch"]').attr('href','css/color_red.css');
		$.cookie('css', 'css/color_red.css', { expires: 1 });
	}
	else if(color=='color7')
	{
		$('link[id="clrswitch"]').attr('href','css/color_violet.css');
		$.cookie('css', 'css/color_violet.css', { expires: 1 });
	}
	else if(color=='color8')
	{
		$('link[id="clrswitch"]').attr('href','css/color_vividora.css');
		$.cookie('css', 'css/color_vividora.css', { expires: 1 });
	}
	else if(color=='color9')
	{
		$('link[id="clrswitch"]').attr('href','css/color_turquoiseblue.css');
		$.cookie('css', 'css/color_turquoiseblue.css', { expires: 1 });
	}
	else if(color=='color10')
	{
		$('link[id="clrswitch"]').attr('href','css/color_lightorange.css');
		$.cookie('css', 'css/color_lightorange.css', { expires: 1 });
	}
	else if(color=='color11')
	{
		$('link[id="clrswitch"]').attr('href','css/color.css');
		$.cookie('css', 'css/color.css', { expires: 1 });
	}
	else if(color=='color12')
	{
		$('link[id="clrswitch"]').attr('href','css/color.css');
		$.cookie('css', 'css/color.css', { expires: 1 });
	}
	});
	$('.stylereset').click(function(e){
		$.cookie('css', '', { expires: 1 });
		$('link[id="clrswitch"]').attr('href','css/color.css');
		e.preventDefault();
	});	
	
	/* color switcher_bg */
	if($.cookie("css")) {
	$('link[id="clrswitch_bg"]').attr("href",$.cookie("css"));
	}
	
	$('.ul-colors li').click(function(){
	color=($(this).attr('id'));
	
	if(color=='color11')
	{
		$('link[id="clrswitch_bg"]').attr('href','css/color_bg_white.css');
		$.cookie('css', 'css/color_bg_white.css', { expires: 1 });
	}
	else if(color=='color12')
	{
		$('link[id="clrswitch_bg"]').attr('href','css/color_bg_black.css');
		$.cookie('css', 'css/color_bg_black.css', { expires: 1 });
	}
	});
	

	$('.stylereset').click(function(e){
		$.cookie('css', '', { expires: 1 });
		$('link[id="clrswitch_bg"]').attr('href','css/color.css');
		e.preventDefault();
	});	
	
	/* color switcher_bg1 */
	if($.cookie("css")) {
	$('link[id="clrswitch_bg1"]').attr("href",$.cookie("css"));
	}
	
	$('.ul-colors li').click(function(){
	color=($(this).attr('id'));
	
	if(color=='color11')
	{
		$('link[id="clrswitch_bg1"]').attr('href','css/color_bg_white1.css');
		$.cookie('css', 'css/color_bg_white.css', { expires: 1 });
	}
	else if(color=='color12')
	{
		$('link[id="clrswitch_bg1"]').attr('href','css/color_bg_black1.css');
		$.cookie('css', 'css/color_bg_black1.css', { expires: 1 });
	}
	});
	

	$('.stylereset').click(function(e){
		$.cookie('css', '', { expires: 1 });
		$('link[id="clrswitch_bg1"]').attr('href','css/color.css');
		e.preventDefault();
	});	
		
	
		
	/*	ISOTOPE PORTFOLIO Start */
	var $container = $('.portfolio-wrapper .items');
    $container.imagesLoaded(function () {
        $container.isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows'
        });
    });

    $('.filter li a').click(function () {

        $('.filter li a').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });

        return false;
    });  
	 
	
	$('.overlay a').prepend('<span class="more"></span>');

	$('.overlay').mouseenter(function(e) {
		$(this).children('a').children('span').fadeIn(300);
	}).mouseleave(function(e) {
		$(this).children('a').children('span').fadeOut(200);
	});

	$('.items li').mouseenter(function(e) {

            $(this).children('a').children('div').fadeIn(300);
        }).mouseleave(function(e) {

            if (!$(this).hasClass("active")) $(this).children('a').children('div').fadeOut(200);
        });

	
	
		/*	Home Image Slider (Fade style) */
		$('#banner-fade').bjqs({
           /* height      : 320,
            width       : 620,*/
            responsive  : true
          });
		
		
		/*	Home Image Slider (Slide style) 
		$('#banner-slide').bjqs({
			animtype      : 'slide',
			height        : 320,
			width         : 620,
			responsive    : true,
			randomstart   : true
		  });
		*/
		/*	service mobile icon */
		$('#si_1').click(function () {
			Service1();
       
		}); 
		$('#si_2').click(function () {
			Service2();
       
		}); 	
		$('#si_3').click(function () {
			Service3();
       
		}); 	
		$('#si_4').click(function () {
			Service4();
       
		});
		$('#si_5').click(function () {
			Service5();
       
		});
		$('#si_6').click(function () {
			Service6();
       
		}); 
		$('#si_7').click(function () {
			Service7();
       
		});
		$('#si_8').click(function () {
			Service8();
       
		});  
		  
}); /* End document Ready */ 




 

/*********************/
/*
/*		Custome Home Slide
/*
/*********************/

	/*	Home Image Slider Start */
		$('#banner-fade').bjqs({
            height      : 320,
            width       : 620,
            responsive  : true
          });

	
/*********************/
/*
/*		Service image
/*
/*********************/

function Service1()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service1.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
	}

function Service2()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service2.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
	}


function Service3()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service3.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
	}

function Service4()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service4.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
	}

function Service5()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service5.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
		
	}

function Service6()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service6.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
	}

function Service7()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service7.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
	}

function Service8()
	{
		document.getElementById("demo").innerHTML="<img src='assets/images/service8.png' alt='logo' data-uk-scrollspy='{cls:'uk-animation-scale-up', delay:900, repeat: true}' class='mobile-img1'>";
	}
