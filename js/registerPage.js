
$('#register-submit-button').click(registerForm);

//Submit Form through Enter Key
$("input").keypress(function(event) {
    if (event.which == 13) {
        registerForm();
    }
});


function registerForm(){
	var xmlhttp = new XMLHttpRequest();

	var uName 		= document.getElementById('username').value;
	var uPass 		= document.getElementById('password').value;
	var uPassAgain 	= document.getElementById('password_again').value;

	if (uPass==uPassAgain) {

		xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("register-response").innerHTML=xmlhttp.responseText;
                var response = xmlhttp.responseText
                var pattern = /Success/;
                var exist = pattern.test(response);
                if (exist) { 
                	
                } else {
                	//alert('false');
                }
            }
        }
        
	 	xmlhttp.open("GET","newuser.php?uName="+uName+"&uPass="+uPass,true);
        xmlhttp.send();

	} else {
		$("#password").focus();
		document.getElementById("register-response").innerHTML= 'Password Not Match';
	};	
	
}
