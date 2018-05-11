$('.newWarehouseModal').modal({
	complete: function () {
		document.getElementById("newWarehouseForm").reset();
	},
});
$('.updateWarehouseModal').modal({
	complete: function () {
		$(".updateWarehouseForm").trigger('reset');
	},
});
$('.deleteWarehouseModal').modal();

function validateForm(){
	if ($('.warehouse_name').hasClass('valid')
		&& $('.warehouse_address').hasClass('valid')) {
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