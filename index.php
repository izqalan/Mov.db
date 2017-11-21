<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul >
			<li><a href="index.html">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="about.html">About us</a></li>
		</ul>
	</div>
	<!-- content -->
	<!-- sometimes the button not working-->
	<form class="animated zoomIn big-search" id="searchForm" method="post" action="index.php">
		<input class="search" id="searchText" type="search" name="search" placeholder="search database" required />
		<input class="submit" type="submit" name="submit" value="search"/>
	</form>
	<!-- script is somewhat working but wont display shit-->
	<!-- and footer dissapeared -->
	<!-- kill me -->
	<div class="wrapper">
	<?php
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
	</div>
	
	<!-- end content -->
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>