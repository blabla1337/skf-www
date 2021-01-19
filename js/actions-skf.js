
AOS.init({ 
	startEvent: 'load',
	disable: 'mobile' 
});

$(document).ready(function () {

// ===== Toggle Class Function =====

	$(document).on('click', '[data-toggle="class"]', function () {
		var $target = $($(this).data('target'));
		var classes = $(this).data('classes');
		$target.toggleClass(classes);
		return false;
	});

// ===== One Page Navigation =====

	$('.navigation').onePageNav({
		currentClass: 'act'
	});

// ===== Hero Scroll Down Function =====
	
	$('.hero .down').click(function() {
		$('body,html').scrollTo('#sdlc', 800, {easing: 'easeInOutCirc'});
	});

// ===== SDLC Mobile =====	
	
	if (Modernizr.mq('(max-width: 767px)')) {
		
		$('.navigation').addClass('mobile');
		
		// Open Modal
		
		$('#sdlc a:not(.close)').click(function() {
			$('body').addClass('modal');
			var name = $(this).text();
			var text = $(this).parent().find('.pop').text();
			$('.sdlc-modal .txt').text(text);
			$('.sdlc-modal .name').text(name);
			$('.sdlc-modal').addClass('show');
			setTimeout(function(){ 
				$('.sdlc-modal').addClass('is-active');
			}, 200);
		});
		
		// Close Modal
		
		$('#sdlc .close').click(function() {
			$('.sdlc-modal').removeClass('is-active');
			setTimeout(function(){ 
				$('.sdlc-modal').removeClass('show');
				$('body').removeClass('modal');
			}, 200);
		});
		
	}

// ===== Navigation =====	
	
	$('.navigation .toggle').click(function() {
		
		var $this = $(this);
		var $parent = $this.parent();
		
		$parent.toggleClass('go');
		
		if($parent.hasClass('go')) {
			$parent.addClass('show');
			setTimeout(function(){ 
				$parent.addClass('is-active');
			}, 200);
		} else {
			$parent.removeClass('is-active');
			setTimeout(function(){ 
				$parent.removeClass('show');
			}, 200);			
		};
		
	});
	
});	

$(window).scroll(function(){
	
	$(".header").toggleClass("go", $(document).scrollTop()>10); 
	
});	