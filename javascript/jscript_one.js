function getXMLHttpRequest() {
	var xhr = null;

	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
		} else {
		xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Impossible to use AJAX on your web browser !");
	}
	return xhr;
}


function searchWebsite(){
	var description = document.getElementById("searchbar").value;
	var xmlhttp = getXMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState == XMLHttpRequest.DONE && xmlhttp.status == 200)
		{
			document.getElementById("result").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","listResult.php?description="+description,true);
	xmlhttp.send();
	if (description != null)
	{
		document.getElementById("result").style.visibility="visible";
	}
	else
	{
		document.getElementById("result").style.visibility="hidden";	
	}
}






 
	