<?php
use yii\helpers\Html;

?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<h1 class="page-title">
				Questions for the genre <span class="selected_genre">"<?= $selected_genre->name ?>"</span>
			</h1>
		</div>

		<br>

		<div class="row">
			<div class="col-md-12">
				<p>
				<?php foreach($questions_model as $question): ?>
				
					<?= Html::a('<i>'.$question->text.'</i>', 
							['/quiz/question/','id' => $question->id ], 
							['class' => 'btn btn-primary', 'data-is_active' => $question->is_active]) 
					?>
				
				<?php endforeach; ?>
				</p>
			</div>
		</div>
	</div>
</div>