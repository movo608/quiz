<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\base\Widget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Genres';

echo Breadcrumbs::widget([
	'itemTemplate' => "<li><i>{link}</i></li>\n",
	'links' => [
		['label' => 'Admin', 'url' => ['/admin']],
		['label' => $this->title]
	]
]);

?>
<div class="genres-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
