
function fetchSearchResult(alltags){
	
	var tags = document.getElementById('form_tags_input').value;

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	    	document.getElementById("search-result").innerHTML=xmlhttp.responseText;
	    }
	}

	xmlhttp.open("GET","getdata.php?tags="+tags,true);
	xmlhttp.send();	

}