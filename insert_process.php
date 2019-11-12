<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<?php 
$con= mysqli_connect("localhost","root","","school");
//check connection
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$note=$_POST['note'];
	
$sql="INSERT INTO student (name, mobile, address, note)
VALUES('$name', '$mobile', '$address', '$note')";
	
if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
echo "add complet";
		
mysqli_close($con);
?>
</body>
</html>