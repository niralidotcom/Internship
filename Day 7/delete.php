<!DOCTYPE html>
<html>
<head>
	<title>Delete Record</title>
</head>
<body>
<?php

$connection = mysqli_connect("localhost","root","","demo");
$id=$_GET['deleteid'];
	
	$q=mysqli_query($connection,"update contact set is_delete = 1 where id='{$id}'") or die ("Error".mysqli_error($connection));
	if($q)
{
	echo "<script>alert('Record Delete');
	window.location='display.php'</script>";
}

?>

</body>
</html>