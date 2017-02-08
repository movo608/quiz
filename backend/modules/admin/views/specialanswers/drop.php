<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\AnsweredQuestions */

$this->title = 'Drop Table `Special Questions Answers`';
$this->params['breadcrumbs'][] = ['label' => 'Special Questions Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Drop Query';
?>

<style type="text/css">

.description p {
	font-size: 1.3em;
}

</style>

<div class="answers-drop">
	<div class="page-header">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>
	
	<div class="description">
		<h2>Attention:</h2>
		<p>This section of the website is used for deleting all the contents of the table 'Special Questions Answers'.</p>
		<p>By clicking on the button "Drop Table", you hereby acknoledge the fact that all the special questions' answers will be
		deleted from the database and cannot be recovered.
		</p>
	</div>
	
	<hr>
	
	<div class="questions-drop-form">
		<?php $form = ActiveForm::begin(); ?>
		
		<?= Html::submitButton('Drop', ['class' => 'btn btn-danger']) ?>
		
		<?php ActiveForm::end(); ?>
	</div>
</div>