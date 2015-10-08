$(document).ready(function(){
	$('#connection_popdown').click(function(){
		if(window.matchMedia("(min-width: 768px)").matches) {
			$('#connection_popover').toggle();
			$('#connection_popdown').parent().toggleClass('open');
		} else {
			window.location.href = "/connection";
		}
	});
	
	$('#connection_popover').click(function(){
		event.stopPropagation();
	});
	
	$('.driverornot').find('select').on("change", function(){
		if($(this).val() == "driver") {
			$('.licenceplate').show();
			$('.licenceplate').find('input').prop("required", true);
			console.log($('.licenceplate').find('input'));
		} else {
			$('.licenceplate').hide();
			$('.licenceplate').find('input').prop("required", false);
		}
	});
	
	$('.radio-inline').find('input').on("change", function(){
		if($(this).val() == "0") {
			$('.authorization').show();
		} else {
			$('.authorization').hide();
		}
	});
});