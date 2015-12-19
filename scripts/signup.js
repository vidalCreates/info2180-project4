$( window ).load(function() {
	$('input').blur(function()
	{
    	if( !$(this).val() ) {
        	$(this).addClass('invalid');
    	}else{
    		$(this).removeClass('invalid');
    	}
	});

	var errorFields = $('.error');

	init();
});



function onSubmit(){
	init();
	fields = $('.field');
	password = $('#password');
	confirm = $('#confirm');
	//id = $('#identifier');
	hidden = $('#hidden');
	alphacheck = $('#fname, #lname, #username');
	patt1 = /^([a-zA-Z0-9 -]+)$/;
	patt = /^[0-9]+$/;
	valid = true;

	fields.each(function(){
		if(this.value == null || this.value == ""){
			displayError('#errors');
			displayError('#empty');
			$(this).addClass('invalid');
			valid = false;
		}
	});

	alphacheck.each(function(){
		if(!patt1.test(this.value)){
			displayError('#errors');
			displayError('#illegal');
			$(this).addClass('invalid');
			valid = false;
		}
	});

	if(password.val() != confirm.val()){
		displayError('#errors');
		displayError('#mismatched');
		password.addClass('invalid');
		confirm.addClass('invalid');
		valid = false;
	}

	/*console.log(id.val());
	if(!patt.test(id.val())){
		displayError('#errors');
		displayError('#invalid');
		id.addClass('invalid');
		valid = false;
	}*/
	return valid;
}


function displayError(error){
	if($(error).hasClass("hidden")){
		$(error).removeClass("hidden");
	}
}

function init(){
	$('.error').each(function(){
		if(!$(this).hasClass("hidden")){
			$(this).addClass("hidden");
		}
	});
	$('.field').each(function(){
		if($(this).hasClass("invalid")){
			$(this).removeClass("invalid");
		}
	});
}