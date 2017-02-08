<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialQuestionsAnswers */

$this->title = 'Update Special Questions Answers: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Special Questions Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="special-questions-answers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
