<div class="page-title">
	<h1><?= $selected_question->text ?></h1>
</div>

<div class="container-fluid">
	<div class="answers">
	<?php foreach($answers_model as $answer): ?>
	
		<div style="margin-top: 1em; padding: 2em 2em" data-true="<?= $answer->is_true ?>" class="answer col-md-3 btn btn-primary"><?= $answer->text ?></div>
	
	<?php endforeach; ?>
	</div>
</div>

<div class="jumbotron">
	<div class="col-md-12">
		<h1 class="result" data-answer="no"></h1>
	</div>
</div>