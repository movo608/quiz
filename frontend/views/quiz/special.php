<?php

use yii\helpers\Html;

$this->title = 'Special Question nr. ' . $special_model['id'];

$this->params['breadcrumbs'][] = 'Special';
$this->params['breadcrumbs'][] = $special_model['id'];
?>

<div class="page-header">
	<h1><?= Html::encode($this->title) ?></h1>
</div>

<div class="hidden url" id="<?= Yii::$app->homeUrl . 'frontend/' ?>"></div>

<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="title col-md-6">
				<div class="row">
					<h1><?= $special_model['text'] ?></h1>
				</div>
				
				<div class="row">
					<?php foreach ($special_answers_model as $answer): ?>
					
						<button id="question_id" data-true="<?= $answer->is_true ?>" class="col-md-6 btn btn-primary answer"><?= $answer->text ?></button>
					
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-6 source photo-video">
				<?php if ($special_model['add_on_type'] == 'photo') { ?>
				
					<img class="col-md-10 col-md-offset-2 add-on" src="<?= $special_model['add_on'] ?>"/>
				
				<?php } elseif ($special_model['add_on_type'] == 'video') { ?>
				
					<?= $special_model['add_on'] ?>
				
				<?php } ?>
			</div>
		</div>
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

</script>