$('.newServiceModal').modal();
$('.updateServiceModal').modal();
$('.deleteServiceModal').modal();

function validateForm(){
	if (!$('.service_name').hasClass('invalid')
		&& !$('.service_price').hasClass('invalid')) {
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