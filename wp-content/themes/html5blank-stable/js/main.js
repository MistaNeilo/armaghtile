$ (function () {
	"use strict";

	$(document).ready(function(){
	var $container = $('.isotope-container').imagesLoaded(function(){
		$container.isotope({
		
		});
	});
	//Hide table columns

	$('.price-table hr.price').each(function(){
			$(this).width($(this).parent().parent().parent().width() - 5);
		});

	$('.isotope-filter a').click(function() {
		event.preventDefault();
		var filterValue = $(this).data('filter');
		$container.isotope({ filter: filterValue });
		$('.isotope-filter a').removeClass('active');
		$(this).addClass('active');
	});

	$('.shop-input.trigger').click(function(){
		var ul = $(this).siblings('ul');
		event.preventDefault();
		if(!(ul.is(':visible'))){
			$('.shop-menu .shop-dropdown ul.dropdown').slideUp();
			$(this).siblings('ul').slideDown();
		}
		else
			$(this).siblings('ul').slideUp();
	});

	$('.shop-dropdown ul.dropdown li a').click(function(){
		$(this).parent().parent().parent().children('a').children('span').html($(this).html());
		$(this).parent().parent().slideUp();
	});

	$('.tabs .tab-nav a').click(function(){
		event.preventDefault();
		var index = $(this).parent().children().index($(this));
		$(this).parent().siblings('.tab').hide();
		$(this).parent().siblings('.tab').removeClass('current');
		$(this).parent().siblings('.tab').eq(index).fadeIn();

	});

	$('.accordions .accordion .content').slideUp();
	$('.accordions .accordion a.heading').click(function(){
		event.preventDefault();
			$(this).parent().siblings('.accordion').children('.content').slideUp();
			$(this).parent().siblings('.accordion').children('a').children('i').removeClass('fa-minus').addClass('fa-plus')
			$(this).parent().children('.content').slideDown();
			$(this).parent().children('a').children('i').removeClass('fa-plus').addClass('fa-minus');
	});

	$("section div[class^='col-lg-'].item").each(function(){
		var cls = $(this).attr('class');
		var index = cls.indexOf(' ');
		var number = cls.substring(7, index);
		var height = $(this).height();
		$("section div[class^='col-lg-" + number + "'].info").each(function(){
			$(this).height($(this).width());
		});
	});

	function isScrolledIntoView(elem)
	{	try{
	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();

	    var elemTop = $(elem).offset().top;
	    var elemBottom = elemTop + $(elem).height();

	    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		}
		catch(e){}
	}

	var dialed = false;

	function responsiveSlider() {
		var width = $(window).width();
		var height = $(window).height();
		$('header').height(height);
		$('header .item').height(height - 91);
		$('header .item').css('background-position', 'center center');
	}
	responsiveSlider();
	//Window Resize Event
	$(window).resize(function(){
		responsiveTable();
		responsiveSlider();
		$('.price-table hr.price').each(function(){
			$(this).width($(this).parent().parent().parent().width() - 5);
		});
		$("section div[class^='col-lg-'].item").each(function(){
			var cls = $(this).attr('class');
			var index = cls.indexOf(' ');
			var number = cls.substring(7, index);
			var height = $(this).height();
			if($(window).width() < 768)
			{
				$("section div[class^='col-lg-" + number + "'].info").each(function(){
				$(this).css('height','auto');
				});
			}
			else
			{
				$("section div[class^='col-lg-" + number + "'].info").each(function(){
					$(this).height($(this).width());
				});
			}
		});
	});

	function responsiveTable() {
		var width = $(window).width();
		if(width < 768 && width > 450) {
			$('table thead').children().first().children('th').eq(1).hide();
			$('table thead').children().first().children('th').eq(3).hide();
			$('table tr').each(function(){
				$(this).children('td').eq(1).hide();
				$(this).children('td').eq(3).hide();
			});
		}
		else if(width < 450) {
			$('table thead').children().first().children('th').eq(2).hide();
			$('table thead').children().first().children('th').eq(4).hide();
			$('table tr').each(function(){
				$(this).children('td').eq(2).hide();
				$(this).children('td').eq(4).hide();
			});
			$('table thead').children().first().children('th').eq(1).hide();
			$('table thead').children().first().children('th').eq(3).hide();
			$('table tr').each(function(){
				$(this).children('td').eq(1).hide();
				$(this).children('td').eq(3).hide();
			});
		}
		else {
			$('table th').each(function(){ $(this).show(); })
			$('table td').each(function(){ $(this).show(); })
		}
	}
	var $nav = $('.navbar-default');

	$nav.css('background', 'white');
		        $nav.css('border-color', '#d1d1d1');
		        $nav.css('box-shadow', 'inset 3px 0px 5px red;');

	// Window Scroll Event
	$(window).scroll(function(){
		if(!$('body').hasClass('static'))
		{
		    
		    if ($(window).scrollTop() > 0) {
		        $nav.css('background', 'white');
		        $nav.css('border-color', '#d1d1d1');
		        $nav.css('box-shadow', 'inset 3px 0px 5px red;');
		    } else {
		        $nav.css('background', 'white');
		        $nav.css('border-color', '#d1d1d1');
		        $nav.css('box-shadow', 'inset 3px 0px 5px red;');
		    }
		}

		var element = $('.fact .number');
		var knob = $('.dial');
		if(isScrolledIntoView(element) && element.html() == "0")
			element.countTo();
		if(isScrolledIntoView(knob) && !dialed)
		{

			dialed = true;
			$('.dial').each(function () { 

	          var elm = $(this);
	          var color = elm.attr("data-fgColor");  
	          var perc = elm.attr("value");  
	 
	          elm.knob({ 
	               'value': 1, 
	                'min':0,
	                'max':100,
	                "readOnly":true,
	                "lineCap": 'round',
					"thickness": .2,
					"inputColor": "#2f2f2f",
					"font": "Raleway",
					"fontWeight":700,
	                'dynamicDraw': true
	          });

	          $({value: 0}).animate({ value: perc }, {
	              duration: 1000,
	              easing: 'swing',
	              progress: function () {                  elm.val(Math.ceil(this.value)).trigger('change')
	              }
	          });

	          });
		}

	});

 	$("a[data-rel^='prettyPhoto']").prettyPhoto();

	$('#owl-demo').owlCarousel({
		singleItem:true
	});

	$('.owl-fullscreen').each(function(){
		$(this).owlCarousel({
			singleItem : true,
			pagination:false,
			navigation: true,
			navigationText : ["<i class='icon icon-arrow-left'></i>","<i class='icon icon-arrow-rights'></i>"]
		});
	});

	$('.owl-clients').each(function(){
		$(this).owlCarousel({
			singleItem : false,
			items:4,
			pagination:false,
			navigation: true,
			navigationText : ["<i class='icon icon-arrow-left'></i>","<i class='icon icon-arrow-rights'></i>"]
		});
	});


	$('.owl-blog').each(function(){
		$(this).owlCarousel({
			singleItem : true,
			pagination:false,
			navigation: true,
			navigationText : ["<i class='icon icon-arrow-left'></i>","<i class='icon icon-arrow-rights'></i>"]
		});
	});

	var owlSpec = $('.owl-spec').each(function(){
		$(this).owlCarousel({
			singleItem : true,
			pagination:false,
			afterAction:afterOwl,
			autoPlay:3000
		});
	});

	function afterOwl(){
        var index = $('.owl-spec .owl-item.active').index();
        $('.spec-slider-nav a').removeClass('active');
        $(".spec-slider-nav div:nth-child(" + (index + 1) + ") a").addClass('active');
    }
    
    $('.spec-slider-nav a').click(function(){
    	event.preventDefault();
        var index = $(this).parent().index();
        owlSpec.trigger('owl.goTo', index);
    });

	$('.owl-carousel').each(function(){
		$(this).owlCarousel({
			singleItem : true
		});
	});

	
	try {
		$('.dial').knob({
			lineCap: 'round',
			thickness: .2,
			inputColor: "#2f2f2f",
			font: "Raleway",
			fontWeight:700
		});
	}catch(e){}

});
});

$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top -70
                }, 500);
                return false;
            }
        }
    });

    new WOW().init();
});