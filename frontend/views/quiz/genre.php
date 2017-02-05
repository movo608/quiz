<?php
use yii\helpers\Html;
use common\models\AnsweredQuestions;

$this->title = 'Questions';
$this->params['breadcrumbs'][] = $selected_genre->name;
?>

<style>

	.btn {
		padding: 0.5em 0.5em !important;
	}

</style>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="page-header">
			<h1>
				Questions for the genre <span class="selected_genre">"<?= $selected_genre->name ?>"</span>
			</h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
				<?php
				foreach ($questions_model as $question) {
					
					if (! $is_found = AnsweredQuestions::find()->where(['question_id' => $question->id, 'user_id' => Yii::$app->user->id])->one()) {
					
						echo Html::a('<i>' . $question->id . '</i>', [
								'/quiz/question/',
								'id' => $question->id 
						], [
								'class' => 'btn btn-primary col-md-3 col-lg-3 col-sm-12 col-xs-12 text-justify',
						]);
					} else {
						echo Html::a('<i>' . $question->id . ' (LOCKED)' . '</i>', [
								'/quiz/question/',
								'id' => $question->id
						], [
								'class' => 'btn btn-primary col-md-3 col-lg-3 col-sm-12 col-xs-12 text-justify disabled',
						]);
					}
				}
				?>
				</p>
			</div>
		</div>
	</div>
</div>