<?php
	$con = mysqli_connect("localhost", "root", "") or die(mysql_error());
	$db = mysqli_select_db($con, "movielibrary") or die(mysql_error());
	if($con)
	{
		echo "connected";
	}else{
		echo "Error";
	}

?>