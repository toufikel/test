<?php
		$con=mysqli_connect("localhost","root","");
	//check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
    mysqli_select_db($con,'school');

	
if (isset($_POST['update']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$note=$_POST['note'];
	//updating the table
	$result=mysqli_query("UPDATE student SET name='$name', mobile='$mobile', address='$address', note='$note'WHERE id=$id");
	//redirecting to the display page in our case it is index.php
	header("Location: index.php");
}
?>
<?php
//getting id from url
$id=$_GET['id'];
//slecting data asocciate with this particular id
$result=mysqli_query("SELECT * FROM student WHERE id=$id");

while($res=mysql_fetch_array($result)){
	$name=$res['name'];
	$mobile=$res['mobile'];
	$address=$res['address'];
	$note=$res['note'];
}
?>
<html>
	<title>Edit Data</title>
	<head>
	<meta http-equiv="Content-Type" content-type="text/html"; charset="utf-8"/>
	</head>
	<body>
	<div style="direction: rtl; margin: 0 auto; width: 400px;">
		<a href="index.php">الرئيسية</a>
		<br><br>
		<form name="form1" method="post" action="users/" .$id>
		<table border="0">
			<tr>
			<td>الإسم</td>
				<td>
				<input type="text" name="name" value='<?php echo $name;?>'>
				</td>
				<td>الجوال</td>
				<td>
				<input type="text" name="mobile" value='<?php echo $mobile;?>'>
				</td>
				<td>العنوان</td>
				<td>
				<input type="text" name="address" value='<?php echo $address;?>'>
				</td>
				<td>ملاحظات</td>
				<td><textarea name="note" cols="20" rows="7"><?php echo $note;?></textarea></td>
				<td>
				<input type="hidden" name="id" value='<?php echo $id;?>'>
				</td>
				<td>
				<input type="submit" name="update" value="تحديث">
				</td>
			</tr>
			</table>
		</form>
		</div>
	</body>
</html>