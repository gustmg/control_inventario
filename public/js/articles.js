$('.newArticleModal').modal();
$('.updateArticleModal').modal();
$('.deleteArticleModal').modal();

function validateForm(){
	if (!$('.article_name').hasClass('invalid')	&& !$('.article_price').hasClass('invalid')) {
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