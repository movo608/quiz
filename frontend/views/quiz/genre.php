<?php
use yii\helpers\Html;
use frontend\models\AnsweredQuestions;

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
				<?php if (empty($questions_model)) { ?>
				
					<div class="no-questions-notice notice">
						<h3>No questions linked to this genre found in the database. Input the
						questions of your choice in the admin panel of the website.
						</h3>
					</div>
				
				<?php } else { ?>
				<p>
				<?php
				foreach ($questions_model as $question) {
					
					if (! $is_found = AnsweredQuestions::find()->where(['question_id' => $question->id, 'user_id' => Yii::$app->user->id])->one()) {
					
						echo Html::a('<i>' . $question->id . '</i>', [
								'/quiz/question/',
								'id' => $question->id 
						], [
								'class' => 'btn btn-primary col-md-3 col-lg-3 col-sm-6 col-xs-6 text-justify',
						]);
					} else {
						echo Html::a('<i>' . $question->id . ' (LOCKED)' . '</i>', [
								'/quiz/question/',
								'id' => $question->id
						], [
								'class' => 'btn btn-primary col-md-3 col-lg-3 col-sm-6 col-xs-6 text-justify disabled',
						]);
					}
				}
				?>
				
				<?php } ?>
				</p>
			</div>
		</div>
	</div>
</div>