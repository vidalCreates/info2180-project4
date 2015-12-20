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
	patt = /^(?=.*\d)(?=.*[A-Z]).{8,}$/;
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

	if(!patt.test(password.val())){
		displayError('#errors');
		displayError('#invalid');
		password.addClass('invalid');
		valid = false;
	}

	addUser(valid);

	return false;
}

function addUser(bool){
	if(bool == true){
		var formData = "username="+$('#username').val()+"&firstname="+$('#fname').val()+"&lastname="+$('#lname').val()+"&password="+$('#password').val()+"&confirm="+$('#confirm').val();
		console.log(formData);
		$.ajax({
				type: "POST",
				url: "../scripts/adduser.php",
				data: formData,
				success: function (data) {
					alert('Successfully added user.');
				}
		});
	}else{
		console.log('invalid');
	}
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
