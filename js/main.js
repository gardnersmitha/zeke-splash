$(document).ready(function(){
	setMockupHeight();
	showForm();
});


function setMockupHeight(){
	var width = $('#mockup-container').width();
	var height = width*2.35;
	var contentHeight = height*0.8;
	$('#mockup-container').css({"height":height,"padding-top":height*0.11});
	$('#mockup-content').css({"height":height*0.70,"width":width*0.96});
}



function showForm(){
	$('.cta-button').click(function(e){
		var form = $('.signup-form');
		$('body').css({'overflow':'hidden'});

		//Show the form
		form.fadeIn(function(){

			//Send event to Segment.io
			analytics.track('Viewed Signup Form');

			//Init our submit function
			submitForm();
		});
	});
}

function submitForm(){
	$('#submit-form').click(function(){
		var email  = $('#email-input').val();

		if( email == ''){
			alert('Please enter an email.');
			return false;
		}

		//Submit the form to FormKeep
		$('#signup-form').submit();

		//Send event to Segment.io
		analytics.track('Submitted Email', {
		  email: email,
		  zipcode: zipcode
		});
	});
}
