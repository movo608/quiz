<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpecialQuestions */

$this->title = 'Create Special Questions';
$this->params['breadcrumbs'][] = ['label' => 'Special Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="special-questions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
