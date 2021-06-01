<!DOCTYPE html>
<html>
<head>
	<title>ReProcess</title>
</head>
<body align="center">
<?php
	$fn = $_POST['FNAME'];
	$ln = $_POST['LNAME'];
	$pass = $_POST['PASSWORD'];
	$repass = $_POST['REPASSWORD'];
	$email = $_POST['EMAIL'];
	$moblie = $_POST['MONU'];
	$dob = $_POST['DOB'];
	$gender = $_POST['GENDER'];
	$city = $_POST['CITY'];
	$state = $_POST['STATE'];
	$zip = $_POST['ZIP'];
	$address = $_POST['ADDRESS'];
	
	echo("$fn");
	echo("$ln"). "<br />";  
	echo("$pass"). "<br />";  
	echo("$repass"). "<br />";  
	echo("$email"). "<br />";  
	echo("$moblie"). "<br />";  
	echo("$dob"). "<br />";  
	echo("$gender"). "<br />";  
	echo("$city"). "<br />";  
	echo("$state"). "<br />";  
	echo("$zip"). "<br />";  
	echo("$address"). "<br />";  
	
?>
</body>
</html>