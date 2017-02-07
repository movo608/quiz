<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnsweredQuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Answered Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answered-questions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Drop Table `Answered Questions`', ['drop'], ['class' => 'btn btn-danger']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            'question_id' => [
            	'attribute' => 'question_id',
            	'value' => 'questionsQuestion.text'
    		],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{delete}'],
        ],
    ]); ?>
</div>
