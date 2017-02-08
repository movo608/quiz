<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SpecialQuestionsAnswersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Special Questions Answers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="special-questions-answers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Special Questions Answers', ['create'], ['class' => 'btn btn-success']) ?>
        
        <?= Html::a('Drop Table `Special Questions Answers`', ['drop'], ['class' => 'btn btn-danger']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text',
            'special_question_id',
            'is_true',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
