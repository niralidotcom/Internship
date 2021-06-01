<?php 
$host="localhost";
$username ="root";
$password="";
$dbname="demo";
//create connection
$connection = mysqli_connect($host,$username,$password,$dbname);

$q=mysqli_query($connection,"insert into contact(name,email,phone,message)values('nirali','patel2123@gmail.com','1234567890','i am nirali patel')") or die ("Error".mysqli_error($connection));
//-----check connection
if($q)
{
	echo "<script>alert('Record Added');</script>";
}


?>