<?php
	$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
	$db = mysqli_select_db($con, "movielibrary") or die(mysqli_error());
	if($con)
	{
		echo "connected";
	}else{
		echo "Error";
	}

	$sqldata = mysqli_query($db, "SELECT * FROM movielibrary") or die('error');
	echo "<center><table>";
	echo "<tr><th>ID</th><th>Title</th></tr>";
	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		# code...
		echo("<tr><td>");
		echo $row['MovID'];
		echo("</td></td>");
		echo $row['MovName'];
		echo("</td></tr>");
	}
	echo "</table></center>";


?>