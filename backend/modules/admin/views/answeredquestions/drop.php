<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AnsweredQuestions */

$this->title = 'Drop Table `Answered Questions`';
$this->params['breadcrumbs'][] = ['label' => 'Answered Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Drop Query';
?>

<style type="text/css">

.description p {
	font-size: 1.3em;
}

</style>

<div class="answered-questions-drop">

	<div class="page-header">
    	<h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="description">
    	<h2>Attention:</h2>
    	<p>This section of the website is used to delete the table which tracks
    	the database entries of all the questions which has been answered to.
    	</p>
    	<p>By clicking the button "Drop Table", you hereby acknowledge that the all the
    	entries in the table will be deleted, rendering the questions re-answerable.
    	</p>
    </div>
    
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
