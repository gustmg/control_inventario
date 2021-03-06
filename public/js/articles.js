$('.newArticleModal').modal({
	complete: function () {
		document.getElementById("newArticleForm").reset();
		$('.submit_button').attr('disabled', true);
	},
});
$('.updateArticleModal').modal({
	complete: function () {
		$(".updateArticleForm").trigger('reset');
	},
});
$('.deleteArticleModal').modal();
$('select').material_select();

function validateForm(){
	if ($('.article_name').hasClass('valid') && $('.article_price').hasClass('valid')) {
		$('.submit_button').attr('disabled', false);
	} else {
		$('.submit_button').attr('disabled', true);
	}
}

function submitNewArticle() {
	$('#newArticleForm').submit();
}

function submitUpdateArticle(article_id) {
	$('#updateArticleForm'+article_id).submit();
}

function submitDeleteArticle(article_id) {
	$('#deleteArticleForm'+article_id).submit();
}