/**
 * Created by Xavier on 12/17/2015.
 */
function check (){
    init();
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
        console.log(data);
        if(data === "1"){
			       content.load('homepage.php');
        }else{
          errors();
          console.log("error");
        }
	    }
	});
	return false;
}

function errors(){
  var fields = $('.field');
  displayError('#wrong');
  console.log(fields);
  fields.each(function(){
      $(this).addClass('invalid');
  });
}
