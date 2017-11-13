<?php
	$con = mysqli_connect("localhost","root","") or die(mysql_error());
	mysqli_select_db($con, "movielibrary") or die (mysql_error());
	$output = '';

	if(isset($_POST['s'])){
		$searchq = $_POST['s'];
		$query = mysqli_query($con, "SELECT * FROM `movies` WHERE `movname` LIKE '%searchq%' OR `studioname` LIKE %searchq% ") or die(mysql_error());
		$count = mysql_num_rows($query);
		if($count == 0){
			echo 'There is no search result';
		}
		else
		{
			while ($row = mysqli_fetch_array($query)) {
				# code...
				$movname = $row['movname'];
				$studioname = $row['studioname'];

				$output .= '<div>' .$movname. ' by ' .$studioname. '</div>';
			}
		}
	}
?>