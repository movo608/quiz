<?php

use yii\helpers\Html;

$this->title = 'Special Question nr. ' . $special_model['id'];

$this->params['breadcrumbs'][] = 'Special';
$this->params['breadcrumbs'][] = $special_model['id'];
?>

<div class="page-header">
	<h1><?= Html::encode($this->title) ?></h1>
</div>

<div class="hidden homeUrl" id="<?= Yii::$app->homeUrl . 'frontend/' ?>"></div>

<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="title col-md-6">
				<div class="row">
					<h1><?= $special_model['text'] ?></h1>
				</div>
				
				<div class="row">
					<?php foreach ($special_answers_model as $answer): ?>
					
						<button data-is_true="<?= $answer->is_true ?>" class="col-md-6 btn btn-primary"><?= $answer->text ?></button>
					
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-6 source photo-video">
				<?php if ($special_model['add_on_type'] == 'photo'): ?>
				
					<img class="col-md-10 col-md-offset-2 add-on" src="<?= $special_model['add_on'] ?>"/>
				
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>