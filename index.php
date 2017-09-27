<!DOCTYPE html>
<head>
<title> Title </title>
<link rel="stylesheet" href="style.css" />
<script>
function show(tmp){
	console.log(tmp);
	 if (tmp.length == 0) {
        document.getElementById("res").innerHTML = "Empty";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
					document.getElementById("res").innerHTML = xmlhttp.responseText;
				
                
            }
        }
        xmlhttp.open("GET", "second.php?q=" + tmp, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body> 

<form>
<input  type="text" onkeyup="show(this.value);" name="text" id="text" />
</form>
<span id="res"> Sasd </span>

</body>
</html> 
