<?php
use yii\helpers\Html;

$this->title = 'Quiz :: Index';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="container">
	<div class="row">
		<div class="page-title">
			<h1>Genres</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<?php foreach($genres_model as $genre): ?>
		
			 <?= Html::a('<div class="col-md-6 btn btn-warning">'. $genre->name .'</div>',
			 	['/quiz/genre/', 'id' => $genre->id]) ?>
		
		<?php endforeach; ?>
		</div>
	</div>
</div>