// This script fades the main frame in on the first load.
$(function(){  // $(document).ready shorthand
	$('#login_frame').hide().fadeIn(1500);
	$('#error_box').hide().fadeIn(1500);
	// Close error box on close click.
	$('#closeError').click(function(){
		$('#error_box').fadeOut(250);
	});
});