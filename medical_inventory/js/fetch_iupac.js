// JavaScript Document
function iupaccall(str) { 

    if (str == "") {
        document.getElementById("iupac_block").innerHTML = "";
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
                document.getElementById("iupac_block").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","fetch_iupac.php?q="+str,true);
        xmlhttp.send();
    }
	
}