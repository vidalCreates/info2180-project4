$("#compose").on("click",function compose(){
	$('#popup').load('compose.php');
});

$("#add").on("click",function compose(){
	$('#popup').load('signup.php');
});

$("#logout").on("click",function logout(){
	location.reload();
});

$('#contacts').load('showcontacts.php');
$('#messages').load('showmessages.php');

$("#exit").on("click",function close(){
	$("#popup").html("");
});


function read(id){
	var entry = true;
	if($('#'+id).hasClass("newmessage")){
		entry = false;
		$('#'+id).removeClass("newmessage");
	}
	var mData = "id="+id+"&entry="+entry;
	$.ajax({
	    type: "POST",
	    url: "../scripts/readmessage.php",
	    data: mData,
	    success: function (data) {
        console.log("Sussess");
				$("#popup").html(data);
	    }
	});
}

function savemessage(){
	var fields = $('.field');
	var valid = true;

	fields.each(function(){
		if(this.value == null || this.value == ""){
			$(this).addClass('invalid');
			valid = false;
		}
	});

	if(valid == true){
		var formData = "recipients="+$('#recipients').val()+"&subject="+$('#subject').val()+"&message="+$('#message').val();
		console.log(formData);
		$.ajax({
				type: "POST",
				url: "../scripts/savemessage.php",
				data: formData,
				success: function (data) {
					alert('Successfully sent message.');
				}
		});
	}else{
		console.log("errors");
	}

	return false;
}