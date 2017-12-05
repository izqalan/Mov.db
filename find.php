<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	include('connection.php');
	echo "pro";
	if(isset($_POST["search"])){
		$searchq = $_POST["search"];
		$query = mysqli_query($con, "SELECT * FROM movielibrary WHERE movname LIKE '%$searchq%'") or die();
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			# code...
			echo("<tr><td>");
			echo $row['MovID'];
			echo("</td></td>");
			echo $row['MovName'];
			echo("</td></tr>");
		}
	echo "</table></center>";
	}
	?>
	
</body>
</html>