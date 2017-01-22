//Submit Form through Button
$('#login-submit-button').click(submitForm);

//Submit Form through Enter Key
$("input").keypress(function(event) {
    if (event.which == 13) {
        submitForm();
    }
});


//Main-Function

function submitForm(){
	var uName 		= document.getElementById('uname').value;
	var uPass 		= document.getElementById('passwd').value;

	$.post('validation.php',{uName: uName , uPass: uPass}, function(data){
		if(data=='Error_0'){
			$('#uname').focus();
			$('#login-response').html("<b class='highlight'>Username can't empty.</b>");
		} else if(data=='Error_1'){
			$('#upass').focus();
			$('#login-response').html("<b class='highlight'>Password can't empty.</b>");
		} else if(data=='Error_2'){
			$(location).attr('href','Application/home.php');
		} else if(data=='Error_3'){
			$('#login-response').html("<b class='highlight'>User Doesn't Exist.</b>");
		}
 	});
}
