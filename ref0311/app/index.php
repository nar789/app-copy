<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
	<?
		include("../dblib.php");

		$no=$_GET['no'];

		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("fail");

		$query="select * from ref0311 where no=$no";

		$ret=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($ret);
		echo "<img src=$row[1] onclick=imgclick(\"$row[2]\") class=img>";
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>
