var is_hit = function() {
	$('.result').text('Correct!');
	$('.result').css('color', 'green');
	
	$('.answer').addClass('disabled');
	$('.answer').each(function() {
		if ($(this).attr('data-true') == '1') {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-success');
		} else {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-danger');
		}
	});
};

var is_not_hit = function() {
	$('.result').text('Wrong!');
	$('.result').css('color', 'red');
	
	$('.answer').addClass('disabled');
	$('.answer').each(function() {
		if ($(this).attr('data-true') == '1') {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-success');
		} else {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-danger');
		}
	});
};

$(document).ready(function() {

	var answered = $('.result').attr('data-answer');

	console.log(answered);

	$('.answer').on('click', function() {
		if (answered == 'no') {
			if ($(this).attr('data-true') == '1') {
				is_hit();
				answered = 'yes';
			} else {
				is_not_hit();
				answered = 'yes';
			}
		}
	});

});