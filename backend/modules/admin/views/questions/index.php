<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\QuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questions';

echo Breadcrumbs::widget([
		'itemTemplate' => "<li><i>{link}</i></li>\n",
		'links' => [
				['label' => 'Admin', 'url' => ['/admin']],
				['label' => $this->title]
		]
]);
?>
<div class="questions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Questions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id' => [
            	'attribute' => 'id',
            	'value' => 'id',
            	'header' => 'Question ID'
    		],
            'genre_id' => [
            	'attribute' => 'genre_id',
            	'value' => 'genresGenre.name'
    		],
            'text',
            'photo' => [
            	'format' => ['image', ['class' => 'col-md-12 col-lg-12 col-xs-12']],
            	'attribute' => 'photo',
    		],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
