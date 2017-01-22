
$('#edit-submit-button').click(editSubmit);

//Submit Form through Enter Key
$("input").keypress(function(event) {
    if (event.which == 13) {
        editSubmit();
    }
});


function editSubmit(){

	var name 				= document.getElementById('name').value;
	var phone 				= document.getElementById('phone').value;
	var address 			= document.getElementById('address').value;
	var email 		 		= document.getElementById('email').value;
	var lat 		 		= document.getElementById('lat').value;
	var lon 		 		= document.getElementById('lon').value;

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	    	$('#message').addClass('animated tada');
	        document.getElementById("message").innerHTML=xmlhttp.responseText;
	    }
	}

		xmlhttp.open("GET","update.php?name="+name+"&phone="+phone+"&address="+address+"&email="+email+"&lat="+lat+"&lon="+lon,true);
	xmlhttp.send();	
	

}