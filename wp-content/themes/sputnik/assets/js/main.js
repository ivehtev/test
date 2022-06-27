const burger = $('.burger');
const downloadBtns = $('.qr-btn');
const qrCodeOverlay = $('.qr-overlay');
const qrCode = $('.qr');
const qrCloseBtn = $('.qr__close');

burger.on('click', function() {
	$(this).toggleClass('active');
	$('body').toggleClass('active');
	$('.header__nav-wrapper').slideToggle();
	$('.header__nav-wrapper').toggleClass('active');
});

$(document).on('click', function(e) {
	if ($(e.target).closest('.qr').length || $(e.target).closest('.qr-btn').length) {
		return;
	} 
	qrCodeOverlay.removeClass('active');	
});

downloadBtns.on('click', function(e) {
	if ($(window).width() >= 1024) {
		e.preventDefault();
		qrCodeOverlay.addClass('active');		
	} else {
		window.open(this.href, '_blank');
	}
});
$(window).resize(function() {
	if ($(window).width() <= 1024) {
		qrCodeOverlay.removeClass('active');
	}
});

qrCloseBtn.on('click', function(e) {
	qrCodeOverlay.removeClass('active');	
});


