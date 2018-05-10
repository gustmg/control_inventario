$('.newRawMaterialModal').modal();
$('.updateRawMaterialModal').modal();
$('.deleteRawMaterialModal').modal();
$('select').material_select();

function validateForm(){
	if ($('.raw_material_name').hasClass('valid') && $('.raw_material_price').hasClass('valid')) {
		$('.submit_button').attr('disabled', false);
	} else {
		$('.submit_button').attr('disabled', true);
	}
}

function submitNewRawMaterial() {
	$('#newRawMaterialForm').submit();
}

function submitUpdateRawMaterial(raw_material_id) {
	$('#updateRawMaterialForm'+raw_material_id).submit();
}

function submitDeleteRawMaterial(raw_material_id) {
	$('#deleteRawMaterialForm'+raw_material_id).submit();
}