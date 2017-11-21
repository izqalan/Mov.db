<?php
	$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
	$db = mysqli_select_db($con,"movielibrary") or die(mysqli_error());
	if(!$con)
	{
		die(mysqli_error());
	}

?>