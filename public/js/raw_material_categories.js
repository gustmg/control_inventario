$('.newRawMaterialCategoryModal').modal();
$('.updateRawMaterialCategoryModal').modal();
$('.deleteRawMaterialCategoryModal').modal();

function validateForm(){
	if (!$('.raw_material_category_name').hasClass('invalid')) {
		$('.submit_button').attr('disabled', false);
	} else {
		$('.submit_button').attr('disabled', true);
	}
}

function submitNewRawMaterialCategory() {
	$('#newRawMaterialCategoryForm').submit();
}

function submitUpdateRawMaterialCategory(raw_material_category_id) {
	$('#updateRawMaterialCategoryForm'+raw_material_category_id).submit();
}

function submitDeleteRawMaterialCategory(raw_material_category_id) {
	$('#deleteRawMaterialCategoryForm'+raw_material_category_id).submit();
}