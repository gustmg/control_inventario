$('.updateUserModal').modal();
$('.deleteUserModal').modal();

function submitUpdateUser(id) {
	$('#updateUserForm'+id).submit();
}

function submitDeleteUser(id) {
	$('#deleteUserForm'+id).submit();
}