<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\SpecialQuestions;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialQuestionsAnswers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="special-questions-answers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'special_question_id')->dropDownList( 
    	ArrayHelper::map(SpecialQuestions::find()->all(), 'id', 'text', 'id')
    ) ?>
    
    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_true')->dropDownList([0, 1]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
