// Needed to 'unbind' all 'change' events from input:

jQuery(document).ready(function(){
	jQuery(".gquiz-field.gquiz-instant-feedback input[type='radio']").unbind('change');

	// Disables the 'enter' key so users can't submit the form early:

	jQuery(document).on("keypress", "form", function(event) {
	    return event.keyCode != 13;
	});

	// Allow feedback to be shown if 'enter' or 'space' is used on the inputs:

	jQuery(".gquiz-field.gquiz-instant-feedback input[type='radio']").on('keypress', function(e){
		if(e.keyCode == 32 || e.keyCode == 13){
			gquizShowAnswer(this);
			}
		});
});



