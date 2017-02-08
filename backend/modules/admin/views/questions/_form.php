<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Genres;

/* @var $this yii\web\View */
/* @var $model backend\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'genre_id')->dropDownList(
    	ArrayHelper::map(Genres::find()->all(), 'id', 'name')		
    ) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
