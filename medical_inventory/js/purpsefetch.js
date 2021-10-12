// JavaScript Document
function purpse_id(str) {

    if (str == "") {
        document.getElementById("showprpse").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("showprpse").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","purpsefetch.php?n="+str,true);
        xmlhttp.send();
    }
	
}