$(document).on('click', '.btn-adopt', function() {
	$('.profile-main-container').removeClass('active');
	$('.adopt-main-container').addClass('active');

	

});

$(document).on('click', '.btn-adoption', function() {
	if ($('.adoption-form-1').hasClass('active')) {
		$('.adoption-form-1').removeClass('active')
		$('.adoption-form-2').addClass('active')
	} else if($('.adoption-form-2').hasClass('active')) {
		$('.adoption-form-2').removeClass('active')
		$('.adoption-form-3').addClass('active')
		$(this).html('Adopt')
	} else {
		// save adopt form
	}
});
