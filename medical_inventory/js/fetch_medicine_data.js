// JavaScript Document
function show(str)
{ alert(str);
	
	if (str == "") {
        document.getElementById("iupac_text").innerHTML = "";
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
                document.getElementById("iupac_text").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","fetch_stock_details.php?u="+str,true);
        xmlhttp.send();
    }

}
