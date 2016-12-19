$(function() {
	//dropdown
	function menuResize() {
		var w = $(window).width();
		var x = 768;
		if (w <= x) {
			$(".right-guide.sp li").unbind('mouseenter').unbind('mouseleave');
			$('#panel').css('display', 'none');
			$('.right-guide').addClass('sp').removeClass('pc');
		} else {
			$('#panel').css('display', 'block');
			$('.right-guide').addClass('pc').removeClass('sp');
			$(".right-guide.pc li").hover(function(){
				$(">ul:not(:animated)",this).slideDown("fast");
				$(this).children('a').addClass('menu-active');
			}, function(){
				$(">ul",this).hide();
				$(this).children('a').removeClass('menu-active');
			});
		}
	}
	
	menuResize();
	$(window).resize(menuResize);
	
	if ($('.right-guide').hasClass('pc')) {
		$(".right-guide.pc li").hover(function(){
			$(">ul:not(:animated)",this).slideDown("fast");
			$(this).children('a').addClass('menu-active');
		}, function(){
			$(">ul",this).hide();
			$(this).children('a').removeClass('menu-active');
		});
	} else if ($('.right-guide').hasClass('sp')) {
		$(".right-guide.sp li").unbind('mouseenter', function() {
			$(">ul:not(:animated)",this).slideDown("fast");
			$(this).children('a').addClass('menu-active');
		}).unbind('mouseleave', function() {
			$(">ul",this).hide();
			$(this).children('a').removeClass('menu-active');
		});
		$('.right-guide.sp li').click(function () {
			$(this).next('ul').slideToggle('fast');
		});
		$('li').click(function (e) {
			$(this).children('ul').slideToggle('fast');
			e.stopPropagation();
		});
	}
	
	//sp menu
	$(function() {
		$("#panel-btn").click(function() {
		  $("#panel").slideToggle(200);
		  $("#panel-btn-icon").toggleClass("close");
		  return false;
		});
	  });
	  
	//search
	$('.header-right .search').on('click', function() {
		if (!$('.search-box').hasClass('open')) {
			$('.search-box').addClass('open').slideDown();
		}
	});
	
	$('.search-box .close').on('click', function() {
		if ($('.search-box').hasClass('open')) {
			$('.search-box').removeClass('open').slideUp();
		}
	});
	
	//faq pulldown
	$('.dl-box dt').on('click', function() {
		$(this).parent().toggleClass('open');
		$(this).next().slideToggle();
	});
	
	//文字数取得
	$('.clothes-guid p, .having-item p, .having-item .user-bottom-information table td, .wore .user-bottom-information table td').each(function() {
		var count = $(this).data('count');
		var thisText = $(this).text().replace(/\s+/g,'');
		var textLength = thisText.length;
		if (textLength > count) {
			var showText = thisText.substring(0, count);
			var insertText = showText;
			insertText += '…';
			$(this).html(insertText);
		};
	});
	
	//高さ取得
	$('.match-height').matchHeight();
	$(window).resize(function() {
		$('.match-height').matchHeight();
	});
	
	
	
	/*-----add 20161216-----*/
	$('.alert .close').on('click', function() {
		$(this).parent().parent().fadeOut();
	});
	
	$('button.check.address').on('click', function() {
		$(this).next().slideToggle();
	});

});