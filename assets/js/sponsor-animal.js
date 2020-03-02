var countryList = {};
var statesList = [];
$.ajax({
	url: "assets/json/countries_states_cities.json",
	async: true,
	success: function(result){
		countryList = result;
		addressData.country();
	}
});



var addressData = {
	country: function () {

		var countryListOpt = '<option val="" data-country-key="0">Select Country</option>';
		$.each(countryList, function(countryKey, countryVal) {
			countryListOpt += '<option val="'+countryVal.iso2+'" data-country-key="'+countryKey+'">'+countryVal.name+'</option>';
		});
		$('.country-list').html(countryListOpt);
	},
	states: function (countryKey = -1) {

		var stateListOpt = '<option val="" data-state-key="0">Select State/Province</option>';

		if (countryKey < 1) {
			$('.state-list').html(stateListOpt);
			return;
		}

		statesList = Object.entries(countryList[countryKey].states);

		$.each(statesList, function(stateKey, stateVal) {
			stateListOpt += '<option val="'+stateVal[0]+'" data-state-key="'+stateKey+'">'+stateVal[0]+'</option>';
		});

		$('.state-list').html(stateListOpt);
	},
	cities: function (stateKey = -1) {
		var stateListOpt = '<option val="">Select City</option>';
		if (stateKey < 1) {
			$('.city-list').html(stateListOpt);
			return;
		}
		citiesList = statesList[stateKey][1];

		$.each(citiesList, function(cityKey, cityVal) {
			stateListOpt += '<option val="'+cityVal+'">'+cityVal+'</option>';
		});

		$('.city-list').html(stateListOpt);
	}

}

$(document).on('change', '.country-list', function() {
	var countryKey  = $(this).find(':selected').data('countryKey')

	addressData.states(countryKey);
});

$(document).on('change', '.state-list', function() {
	var stateKey  = $(this).find(':selected').data('stateKey')
	addressData.cities(stateKey);
});

$(document).on('click', '.sponsor-amount', function() {
	$('.sponsor-amount').removeClass('selected');
	$(this).addClass('selected');
});

$(document).on('click', '.btn-sponsor-payment-type ', function() {
	$('.btn-sponsor-payment-type ').removeClass('selected');
	$(this).addClass('selected');
});

$(document).on('click', '.btn-sponsor-next ', function() {
	var selectedClass = '';
	if ($('.sponsor-form-info').hasClass('selected')) {
		selectedClass = '.sponsor-form-amount';
	} else if ($('.sponsor-form-amount').hasClass('selected')) {
		selectedClass = '.sponsor-form-payment';
		$('.sponsor-next-btn').html('DONATE $10 MONTHLY')
	} else {
		return
	}
	$('.sponsor-form').removeClass('selected');
	$(selectedClass).addClass('selected');

});

$(document).on('click', '.btn-sponsor-payment-method', function(e) {
	$('.sponsor-form-payment .tab-pane, .btn-sponsor-payment-method').removeClass('active');
	
	$($(this).data('target')).addClass('active');

	$(this).addClass('active');
});



