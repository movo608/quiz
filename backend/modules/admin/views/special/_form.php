<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialQuestions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="special-questions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_on_type')->dropDownList(['photo', 'video']) ?>

    <?= $form->field($model, 'add_on')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
