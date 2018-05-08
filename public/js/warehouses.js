$('.newWarehouseModal').modal();
$('.updateWarehouseModal').modal();
$('.deleteWarehouseModal').modal();

function validateForm(){
	if (!$('.warehouse_name').hasClass('invalid')
		&& !$('.warehouse_address').hasClass('invalid')) {
		$('.submit_button').attr('disabled', false);
	} else {
		$('.submit_button').attr('disabled', true);
	}
}

function submitNewWarehouse() {
	$('#newWarehouseForm').submit();
}

function submitUpdateWarehouse(warehouse_id) {
	$('#updateWarehouseForm'+warehouse_id).submit();
}

function submitDeleteWarehouse(warehouse_id) {
	$('#deleteWarehouseForm'+warehouse_id).submit();
}