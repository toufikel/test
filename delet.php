<?php
//including the database connection file
	$con=mysqli_connect("localhost","root","");
	//check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
    mysqli_select_db($con,'school');


//get id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query("DELETE FROM student WHERE id=$id");

//redirecting to the display page (index.php)
header("Location:index.php");

?>
