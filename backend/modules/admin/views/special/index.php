<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SpecialQuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Special Questions';

echo Breadcrumbs::widget([
		'itemTemplate' => "<li><i>{link}</i></li>\n",
		'links' => [
				['label' => 'Admin', 'url' => ['/admin']],
				['label' => $this->title]
		]
]);
?>
<div class="special-questions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Special Questions', ['create'], ['class' => 'btn btn-success']) ?>
        
        <?= Html::a('Drop Table `Special Questions`', ['drop'], ['class' => 'btn btn-danger']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text',
            'add_on_type',
            'add_on',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
