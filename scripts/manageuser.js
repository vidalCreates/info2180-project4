

$("#compose").on("click",function compose(){
	$('#composemessage').load('compose.php');
});

$("#logout").on("click",function logout(){
	location.reload();
});

$('#contacts').load('showcontacts.php');
$('#messages').load('showmessages.php');

$("#exit").on("click",function close(){
	$("#composemessage").html("<p>BLAHAASDASD</p>");
	console.log("clicked")
});

function logout(){

}