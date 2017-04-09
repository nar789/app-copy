<?
	include("dblib.php");

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("fail");

	$query="select imgurl,url from ref0311";

	$ret=mysqli_query($conn,$query);
	echo "{";
	$cnt=0;
	while($row=mysqli_fetch_array($ret)){
		$cnt++;
		echo "\"imgurl$cnt\":\"$row[0]\",\"url$cnt\":\"$row[1]\"";
		if($cnt!=4)
			echo ",";
	}
	echo "}";

?>
