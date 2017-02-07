<?php
use yii\helpers\Html;

$this->title = 'Genres';
$this->params ['breadcrumbs'] [] = $this->title;
?>

<style>

	.genre-tab {
		color: black !important;
	}

</style>

<div class="container">
	<div class="page-header">
		<h1>Genres</h1>
	</div>
	<div class="row">
		<div class="genres col-md-12">
		
		<?php if (empty($genres_model)) { ?>
		
			<div class="no-genres-notice notice">
				<h3>No music genres to display yet. Input the genres of your choice in the admin panel of the website.</h3>
			</div>
		
		<?php } else { ?>
		
			<?php foreach($genres_model as $genre): ?>
			
				 <?= Html::a('<div class="genre-tab col-md-3 col-xs-6 col-sm-6 btn btn-warning">' . $genre->name . '</div>', [ '/quiz/genre/','id' => $genre->id ])?>
			
			<?php endforeach; ?>
		
		<?php } ?>
		</div>
	</div>
</div>