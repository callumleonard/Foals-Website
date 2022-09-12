window.onload=preparePage();

function preparePage(){

//target the button using getelementbyid
var clickButton=document.getElementById("btn-pidge");

	//when the button is clicked call function
	clickButton.onclick=function(){
		loadDoc();
	}
}

//load document function
function loadDoc() {
	//setting up the XML request object (getting data from the server in the background)
	var xhttp = new XMLHttpRequest();
	
	//if state is changed call this function
	xhttp.onreadystatechange = function() {
    
	//if the state is equal to 4 request is ready and if the status code is 200 then we can progress	
    if (this.readyState == 4 && this.status == 200) {
    	
    	
    	//targeting pidge-button which contains the location where the text should be changed
    	//responseText is the content returned by the XMLrequest
    	document.getElementById("pidge-button").innerHTML = this.responseText;
    }
  };
  
  //get request finding the file pidge.php
  xhttp.open("GET", "pidge.php", true);
  
  
  //sending the request to the server
  xhttp.send();
}

