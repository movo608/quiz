$(document).ready(function() {
	
	var hit;
	
	$('.answer').on('click', function() {
		var is_true = $(this).attr('data-true');
		
		if (is_true == '1') {
			hit = true;
		} else {
			hit = false;
		}
		
		if (hit) {
			$('.answer').addClass('disabled');
			$('.answer').addClass('btn-danger');
			$('.answer').removeClass('btn-primary');
			
			$(this).addClass('btn-success');
			$(this).removeClass('btn-primary');
			$(this).removeClass('btn-danger');
			
			$('.result').text('Correct!');
			$('.result').css('color', 'green');
		} else {
			/*
			 * make buttons unclickable
			 * color the wrong ones in red
			 * color the good one in yellow
			 * this branch activates if the user clicks a wrong answer
			 * .text() to h1.result "wrong" message
			 */
			$('.answer').addClass('disabled');
			$('.answer').removeClass('btn-primary');
			$('.answer').addClass('btn-warning');
		}
	});

});