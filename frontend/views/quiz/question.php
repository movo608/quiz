<?php
$this->title = $selected_question->id;
$this->params ['breadcrumbs'] [] = 'Questions';
$this->params ['breadcrumbs'] [] = $this->title;
?>

<div class="page-title">
	<h1><?= $selected_question->text ?></h1>
</div>

<div class="url" id="<?= dirname((Yii::$app->homeUrl)) ?>"></div>

<div class="container-fluid">
	<div class="answers">
	<?php foreach($answers_model as $answer): ?>
	
		<button id="<?= $answer->question_id ?>"
			style="margin-top: 1em; padding: 2em 2em"
			data-true="<?= $answer->is_true ?>"
			class="answer col-md-3 btn btn-primary">	<?= $answer->text ?></button>
		
	<?php endforeach; ?>
	</div>
</div>

<div class="jumbotron">
	<div class="col-md-12">
		<h1 class="result"></h1>
	</div>
</div>

<script type="text/javascript">

var id;
var home_url = $('.url').attr('id');

$(document).ready(function() {

	var answered = 'no';
	
	$('.answer').on('click', function() {
		
		id = $(this).attr('id');
		
		if (answered == 'no') {
			if ($(this).attr('data-true') == '1') {
				is_hit();
				answered = 'yes';
			} else {
				is_not_hit();
				answered = 'yes';
			}

			db_update();
		}
	});

});

var is_hit = function() {
	$('.result').text('Correct!');
	$('.result').css('color', 'green');
	
	$('.answer').addClass('disabled');
	$('.answer').each(function() {
		if ($(this).attr('data-true') == '1') {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-success');
		} else {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-danger');
		}
	});
};

var is_not_hit = function() {
	$('.result').text('Wrong!');
	$('.result').css('color', 'red');
	
	$('.answer').addClass('disabled');
	$('.answer').each(function() {
		if ($(this).attr('data-true') == '1') {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-success');
		} else {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-danger');
		}
	});
};

var db_update = function() {
	
	$.get(home_url + '/web/quiz/api/' + id, {
		
	}, function() {
		// API call done
	});
	
};

</script>