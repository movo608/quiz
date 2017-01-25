<?php
use yii\helpers\Html;
use common\models\AnsweredQuestions;

$this->title = 'Questions';
$this->params['breadcrumbs'][] = $selected_genre->name;
?>

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
					
						echo Html::a('<i>' . $question->text . '</i>', [
								'/quiz/question/',
								'id' => $question->id 
						], [
								'class' => 'btn btn-primary col-md-6 col-lg-6 col-sm-12 col-xs-12 text-justify',
								'data-is_active' => $question->is_active 
						]);
					} else {
						echo Html::a('<i>' . $question->text . '</i>', [
								'/quiz/question/',
								'id' => $question->id
						], [
								'class' => 'btn btn-primary col-md-6 col-lg-6 col-sm-12 col-xs-12 text-justify disabled',
								'data-is_active' => $question->is_active
						]);
					}
				}
				?>
				</p>
			</div>
		</div>
	</div>
</div>