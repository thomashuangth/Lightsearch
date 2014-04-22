function getXMLHttpRequest() {
	var xhr = null;

	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
		} 
		else {
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
			if (!description)
			{
				document.getElementById("result").style.visibility="hidden";	
			}
			else
			{
				document.getElementById("result").style.visibility="visible";
			}
		}
	}
	xmlhttp.open("GET","listResult.php?description="+description,true);
	xmlhttp.send();
}

function leftArrowPressed() {
	console.log("Left");
}

function rightArrowPressed() {
	console.log("Right");
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    switch (evt.keyCode) {
        case 37:
            leftArrowPressed();
            break;
        case 39:
            rightArrowPressed();
            break;
    }
};








