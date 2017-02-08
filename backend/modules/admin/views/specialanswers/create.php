<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpecialQuestionsAnswers */

$this->title = 'Create Special Questions Answers';
$this->params['breadcrumbs'][] = ['label' => 'Special Questions Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="special-questions-answers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
