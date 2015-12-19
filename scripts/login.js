/**
 * Created by Xavier on 12/17/2015.
 */
function check (){
    var uname = $('#username').val();
    console.log(uname);
    var pass = $('#password').val();
    console.log(pass);
    var temp = "username="+uname+"&password="+pass;
    var content = $('#content');
	
	$.ajax({
	    type: "POST",
	    url: "../scripts/login.php",
	    data: temp,
	    success: function (data) {
			content.load('homepage.php');
	    }
	});
	return false;
}