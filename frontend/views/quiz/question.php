<div class="page-title">
	<h1><?= $selected_question->text ?></h1>
</div>

<div class="container-fluid">
	<div class="answers">
	<?php foreach($answers_model as $answer): ?>
	
		<div style="margin-top: 1em; padding: 2em 2em" data-is_true="<?= $answer->is_true ?>" class="col-md-6 btn btn-primary"><?= $answer->text ?></div>
	
	<?php endforeach;?>
	</div>
</div>