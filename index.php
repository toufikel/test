	<?php
	$con=mysqli_connect("localhost","root","");
	//check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
    mysqli_select_db($con,'school');
	
	
	$result= mysqli_query($con,"SELECT * FROM student ORDER BY id DESC");
    mysqli_close($con);
	?>

<html>
<title>الرئيسية</title>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	</head>
	<body>
	<div style="direction: rtl">
		<a href="insert.php">إضافة جديدة</a><br><br>
		<?php
		
		echo "<table width='50%' border=0 align=center>";
		
		
		echo "<tr bgcolor='#CCCCCC'>";
		echo "<td>الإسم</td>";
		echo "<td>الجوال</td>";
		echo "<td>العنوان</>";
		echo "<td>ملاحظات</td>";
		echo "</tr>";
		
		
		while($res=mysqli_fetch_array($result)){
			
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['mobile']."</td>";
			echo "<td>".$res['address']."</td>";
			echo "<td>".$res['note']."</td>";
			echo "<td><a href='edit.php,id=$res[id]'>تعديل</a> | <a href='delet.php?id=$res[id]'>حدف</a></td>";
			
		}
		echo "</table>";
		?>
		</div>
	</body>
</html>