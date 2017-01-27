<?php
use yii\helpers\Html;

$this->title = 'Test File';
?>

<div class="page-header">
	<h1><?= Html::encode($this->title) ?></h1>
</div>

<div class="grid col-md-12">
	<?php for ($i = 0; $i < 10; $i++): ?>
	<img class="col-md-4 grid-item"
		src="http://a57.foxnews.com/media2.foxnews.com/BrightCove/694940094001/2015/12/28/876/493/694940094001_4677693675001_81510864-2881-4c30-b493-998c07a6e8b6.jpg?ve=1&tl=1" />
	<img class="col-md-4 grid-item"
		src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQslCJSpXzx0ySIrIv2tS4Inke-Sk45sX7z8dO7jxEMDpV0aQf9Tg" />
	<img class="col-md-4 grid-item"
		src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQslCJSpXzx0ySIrIv2tS4Inke-Sk45sX7z8dO7jxEMDpV0aQf9Tg" />
	<?php endfor; ?>	
</div>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>