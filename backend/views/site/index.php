<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Backend';

echo Breadcrumbs::widget([
		'itemTemplate' => "<li><i>{link}</i></li>\n",
		'links' => [
			['label' => 'Backend']
		]
]);
?>
<div class="site-index">
	<div class="page-header">
		<h1>The Back-end</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="description" style="font-size: 2em">
				Through the backend, one may have access to the database entries.
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4">
				Inside the 'genres' tab, you may decide upon adding or removing music genres.
			</div>
			<div class="col-md-4">
				Inside the 'questions' tab, you may decide upon adding or removing questions related to specific music genres.
			</div>
			<div class="col-md-4">
				Inside the 'asnwers' tab, you may decide upon adding or removing answers related to a specific question.
			</div>
		</div>
	</div>
	<div class="jumbotron">
		<div class="row">
			<h3>Click <?= Html::a('here', ['/admin']) ?> in order to access the admin panel.</h3>
		</div>
	</div>
</div>
