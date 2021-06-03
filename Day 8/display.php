<!DOCTYPE html>
<html>
<head>
	<title>Display User data</title>
</head>
<body>
<?php

$connection = mysqli_connect("localhost","root","","demo");

	$q=mysqli_query($connection,"select * from contact where is_delete=0 ") or die ("Error".mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<td>id</td>";
echo "<td>Name</td>";
echo "<td>Email</td>";
echo "<td>Phone</td>";
echo "<td>Message</td>";
echo "<td>Action</td>";
echo "</tr>";
$i=0;
while ($row=mysqli_fetch_array($q)) {
	$i++;
echo "<tr>";
echo "<td>$i</td>";
echo "<td>{$row['name']}</td>";
echo "<td>{$row['email']}</td>";
echo "<td>{$row['phone']}</td>";
echo "<td>{$row['message']}</td>";
echo "<td><a href='edit.php?id={$row['id']}'>Edit</a>|<a href='delete.php?deleteid={$row['id']}'>Delete</a></td>";
echo "</tr>";



}
echo "</table>";

	echo "<a href='contact.php'>Add Record</a>";




?>
</body>
</html>