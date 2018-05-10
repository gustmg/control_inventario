$('.newServiceModal').modal({
	complete: function () {
		document.getElementById("newServiceForm").reset();
	},
});
$('.updateServiceModal').modal();
$('.deleteServiceModal').modal();

function validateForm(){
	if ($('.service_name').hasClass('valid') && $('.service_price').hasClass('valid')) {
		$('.submit_button').attr('disabled', false);
	} else {
		$('.submit_button').attr('disabled', true);
	}
}

function submitNewService() {
	$('#newServiceForm').submit();
}

function submitUpdateService(service_id) {
	$('#updateServiceForm'+service_id).submit();
}

function submitDeleteService(service_id) {
	$('#deleteServiceForm'+service_id).submit();
}