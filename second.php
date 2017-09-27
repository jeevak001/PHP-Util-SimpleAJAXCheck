<!DOCTYPE html>
<head>
<title> Title </title>
<link rel="stylesheet" href="style.css" />
</head>
<body> 

<?php

 $tmp = $_GET['q'];
 
 if((strlen($tmp)%2) == 0){
	 echo "Even";
 }else{
	 echo "Odd";
 }

?>
</body>
</html> 
