$('.newBranchOfficeModal').modal();
$('.updateBranchOfficeModal').modal();
$('.deleteBranchOfficeModal').modal();

function validateForm(){
	if (!$('.branch_office_name').hasClass('invalid')
		&& !$('.branch_office_address').hasClass('invalid')) {
		$('.submit_button').attr('disabled', false);
	} else {
		$('.submit_button').attr('disabled', true);
	}
}

function submitNewBranchOffice() {
	$('#newBranchOfficeForm').submit();
}

function submitUpdateBranchOffice(branch_office_id) {
	$('#updateBranchOfficeForm'+branch_office_id).submit();
}

function submitDeleteBranchOffice(branch_office_id) {
	$('#deleteBranchOfficeForm'+branch_office_id).submit();
}