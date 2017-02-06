<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Admin Module';

echo Breadcrumbs::widget([
		'itemTemplate' => "<li><i>{link}</i></li>\n",
		'links' => [
				['label' => 'Admin'],
		]
]);
?>
<div class="admin-default-index">
    <div class="page-header">
    	<h1>Admin</h1>
    </div>
    <div class="jumbotron">
    	<div class="genres">
    		<h2><?= Html::a('Genres', ['genres/index']) ?></h2>
    	</div>
    	<div class="questions">
    		<h2><?= Html::a('Questions', ['questions/index']) ?></h2>
    	</div>
    	<div class="answers">
    		<h2><?= Html::a('Answers', ['answers/index']) ?></h2>
    	</div>
    </div>
</div>
