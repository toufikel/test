
	<?php
	$con=mysqli_connect("localhost","root","");
	//check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
    mysqli_select_db($con,'school');
	mysqli_close($con);
	?>
