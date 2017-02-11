<?php
use yii\helpers\Html;

$this->title = $selected_question->text;
$this->params ['breadcrumbs'] [] = 'Questions';
$this->params ['breadcrumbs'] [] = $selected_question->id;
?>

<div class="url" id="<?= dirname((Yii::$app->homeUrl)) ?>"></div>

<div class="container">
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="row">
				<div class="page-header">
					<h1><?= Html::encode($this->title) ?></h1>
				</div>
			</div>
			<div class="answers">
			
				<?php if (empty($answers_model)) { ?>
				
					<div class="empty-result">
						<h2>No answers linked to this question. Add some into the admin panel. (:</h2>
					</div>
				
				<?php } else { ?>
			
					<?php foreach($answers_model as $answer): ?>
					
						<button id="<?= $answer->question_id ?>"
							style="margin-top: 1em; padding: 2em 2em"
							data-true="<?= $answer->is_true ?>"
							class="answer col-sm-12 col-xs-12 col-md-12 btn btn-primary">	<?= $answer->text ?></button>
							<!-- class="col-md-6" removed from <button> tag -->
							
					<?php endforeach; ?>
				
				<?php } ?>
			</div>
		</div>
		<div style="margin-top: 1em" class="col-md-6 col-xs-12 col-sm-12 col-lg-6 question-photo">
			<div class="photo">
				<img class="col-md-12 col-xs-12 col-sm-12 col-lg-12" src="<?= $selected_question->photo ?>"/>
			</div>
		</div>
	</div>
</div>

<div class="jumbotron">
	<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
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
	
	$.get(home_url + '/web/quiz/api/' + id, function() {
		// API call done
	});
	
};

</script>