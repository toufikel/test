<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<title>Insert Data</title>
	<style type="text/css">
		.student{
			margin: 0 auto;
			width: 400px;
			direction: rtl;
			color: #C00;
			font-family: 'Times New Roman', Times, 'serif';
			font-size: 16px;
			border: 1px solid #990;
			border-radius: 3px;
			padding: 4px;
		}
	</style>
</head>
<html>
<body>
		<center><b>ادخل بيانات الطالب</b> </center>
	<div class="student">
	<br>
		<form action="insert_process.php" method="post">
			اسم الطالب
			<input type="text" name="name"><br>
			الجوال
			<input type="num" name="mobile"><br>
			العنوان
			<input type="text" name="address"><br>
			ملاحظات
			<input type="text" name="note"><br>
			<input type="submit">
		</form>
	</div>

</body>
</html>