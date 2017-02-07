<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnswersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Answers';

echo Breadcrumbs::widget([
		'itemTemplate' => "<li><i>{link}</i></li>\n",
		'links' => [
				['label' => 'Admin', 'url' => ['/admin']],
				['label' => $this->title]
		]
]);
?>
<div class="answers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Answers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'layout' => "{summary}\n{items}\n{pager}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'question_id' => [
            	'attribute' => 'question_id',
            	'value' => 'questionsQuestion.text'
    		],
            'text',
            'is_true',

            ['class' => 'yii\grid\ActionColumn'],
        ]
    ]); ?>
</div>
