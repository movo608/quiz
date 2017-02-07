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

<style type="text/css">
	.owner-instructions p {
		font-size: 1.3em;
	}
</style>

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
		<div class="owner-instructions col-md-12">
			<div class="col-md-4">
				<h3>Genres</h3>
				<p>Inside the 'genres' tab, you may decide upon adding or removing music genres.</p>
			</div>
			<div class="col-md-4">
				<h3>Questions</h3>
				<p>Inside the 'questions' tab, you may decide upon adding or removing questions related to specific music genres.</p>
			</div>
			<div class="col-md-4">
				<h3>Answers</h3>
				<p>Inside the 'asnwers' tab, you may decide upon adding or removing answers related to a specific question.</p>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="jumbotron">
		<div class="row">
			<h3>Click <?= Html::a('here', ['/admin']) ?> in order to access the admin panel.</h3>
		</div>
	</div>
	
	<div class="author">
		<div class="row">
			<div class="author-image col-md-6">
				<img class="col-md-12" src="https://scontent.fotp3-2.fna.fbcdn.net/v/t1.0-9/12993536_1019567404765396_301824428323864326_n.jpg?oh=2f91925cf2bac2dde6531fb5ae8499f1&oe=5908FB4D">
			</div>
			<div class="description col-md-6">
				<h4>This web application has been programmed by <?= Html::a('Sicarius', ['https://www.facebook.com/moldovan.andrei.391'])?> &spades;.</h4>
				<p>I hereby offer my services on-demand, as requested by the owner of the app.</p>
				<p>The following changes are possible:</p>
				<ul>
					<li>changes in the lines of the program, be it in sepparate branches or in the framework</li>
					<li>changes in the lines of styling</li>
					<li>changes in the lines of user-interface interaction</li>
				</ul>
				<details>
					<summary>License - Sicarius <?= date('Y') ?></summary>
					<p>The website is provided 'as is', changes within the website are allowed to be made 
					without further notice to the author, admin or creator.
					</p>
					<p>However, the author must be given credit by not removing his information from the left-hand side on the footer of
					the website.
					</p>
					<p>Credit will also be given to the creators of the framework on which the entire application is
					based, which is to say, the Yii2 Framework through the notice on the right-hand-side of the footer.
					</p>
					<p>This work may not be copied nor redistributed without further notice to the author.</p>
				</details>
			</div>
		</div>
	</div>
</div>
