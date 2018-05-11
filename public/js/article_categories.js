$('.newArticleCategoryModal').modal({
	complete: function () {
		document.getElementById("newArticleCategoryForm").reset();
		$('.submit_button').attr('disabled', true);
	},
});
$('.updateArticleCategoryModal').modal({
	complete: function () {
		$(".updateArticleCategoryForm").trigger('reset');
	},
});
$('.deleteArticleCategoryModal').modal();

function validateForm(){
	if (!$('.article_category_name').hasClass('invalid')) {
		$('.submit_button').attr('disabled', false);
	} else {
		$('.submit_button').attr('disabled', true);
	}
}

function submitNewArticleCategory() {
	$('#newArticleCategoryForm').submit();
}

function submitUpdateArticleCategory(article_category_id) {
	$('#updateArticleCategoryForm'+article_category_id).submit();
}

function submitDeleteArticleCategory(article_category_id) {
	$('#deleteArticleCategoryForm'+article_category_id).submit();
}