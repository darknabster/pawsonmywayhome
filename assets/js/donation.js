var donation = {
	displayPercentage: function () {
		var currencySymbol = $('.currency-select-option').val();
		var donationAmount = parseInt($('.donation-amount').val());
		var optionMarkUp = '';
		for (var percent = 10; percent <= 100; percent+=10) {
			var total = (percent / 100) * donationAmount
			optionMarkUp += '<option value="'+total+'">'+percent+'% ('+currencySymbol+' '+total.toFixed(2)+')</option>'
		}

		$('.donation-percentage').html(optionMarkUp);
		donation.displayTotalAmount();
	},
	displayTotalAmount: function () {
		var currencySymbol = $('.currency-select-option').val();
		var selectedAmount = parseFloat($('.donation-amount').val());
		var totalPercentage = parseFloat($('.donation-percentage').val());
		var totalAmount = selectedAmount + totalPercentage;

		$('.donation-total-amount').html('Total amount: ' + currencySymbol + totalAmount.toFixed(2))
	}
}

donation.displayPercentage();

$(document).on('click', '.btn-donation-amnt', function() {
	$('.btn-donation-amnt').removeClass('selected');
	$(this).addClass('selected');

	var selectedAmount = $(this).val();

	$('.donation-amount').val(selectedAmount);

	donation.displayPercentage();

});

$(document).on('change', '.currency-select-option', function() {
	var currencySymbol = $(this).val();

	$('.selected-curency').html(currencySymbol)

	donation.displayPercentage();

});

$(document).on('change', '.donation-amount', function() {
	donation.displayPercentage();
});

$(document).on('change', '.donation-percentage', function() {
	donation.displayTotalAmount();
});

$(document).on('click', '.btn-donation-payment-type', function() {
	$('.btn-donation-payment-type').removeClass('selected');
	$(this).addClass('selected');

});


$(document).on('click', '#btnContinueDonationAmount', function() {
	$('.donation-container').removeClass('show-container');
	$('.donation-payment-container').addClass('show-container');
});

$(document).on('click', '#btnContinueDonationPayment', function() {
	$('.donation-container').removeClass('show-container');
	$('.donation-message-container').addClass('show-container');
});

$(document).on('click', '#btnContinueDonationMessage', function() {
	$('.donation-container').removeClass('show-container');
	$('.donation-success-container').addClass('show-container');
});

$(document).on('click', '#btnReturnHomepage', function() {
	// home page
});
