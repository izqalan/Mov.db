<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Copy paste this template into a new file -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="navbar">
		<a href="index.html">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="about.html">About us</a></li>
			<li><a href="login.php">Login/Sign up</a></li>
		</ul>
	</div>
	<!-- content -->

	<?php
	include('connection.php');
	if(isset($_POST['search'])){
		$searchq = $_POST['search'];
		$option = $_POST['select'];
		if($option == 'name')
		{
			$query = mysqli_query($con, "SELECT * FROM movies WHERE movname LIKE '%$searchq%'") or die();
		}
		elseif ($option == 'lang') {
			$query = mysqli_query($con, "SELECT * FROM movies WHERE movlang LIKE '%$searchq%'") or die();
		}
		elseif ($option == 'rate') {
			$query = mysqli_query($con, "SELECT * FROM movies WHERE movrating LIKE '%$searchq%'") or die();
		}
		elseif ($option == 'genre') {
			$query = mysqli_query($con, "SELECT * FROM movies WHERE movgenre LIKE '%$searchq%'") or die();
		}
		elseif ($option == 'studio') {
			$query = mysqli_query($con, "SELECT * FROM movies WHERE movstudio LIKE '%$searchq%'") or die();
		}
		elseif ($option == 'director') {
			$query = mysqli_query($con, "SELECT * FROM movies WHERE movdirector LIKE '%$searchq%'") or die();
		}
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {

			# This is not the final output design
			echo("<center><table border='1'>");

			echo "<tr><th>Movie ID</th><th>Movie Name</th><th>Language</th>";
			echo "<th>Rating</th></tr>";
			echo("<tr><td>");
			echo $row['MovID'];
			echo "</td>";
			echo("<td>");
			echo $row['MovName'];
			echo("</td><td>");
			echo $row['MovLang'];
			echo "<td>", $row['MovRating'] ,"</td></tr>";
		}
		
		
	echo "</table></center>";
	}
	?>

	<!-- end content-->
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>
	

</body>
</html>