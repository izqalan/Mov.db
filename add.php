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

	<div class="content">
		<h1>Online Film Registration</h1><br><br>
			<form action="add.php" method="post">
				<!--<input class="sm-form" type="text" name="MovID" placeholder="Movie ID">-->
				<input class="sm-form" type="text" name="MovName" placeholder="Title">
				<input class="sm-form" type="text" name="MovLang" placeholder="Language"><br><br>
				<input class="sm-form" type="text" name="MovRating" placeholder="Movie Rating">
				<input class="sm-form" type="text" name="MovGenre" placeholder="Genre"><br><br>
				<input class="sm-form" type="number" name="MovDuration" placeholder="Duration">
				<input class="sm-form" type="date" name="MovDate" placeholder="Date released"><br><br>
				<input class="sm-form" type="text" name="MovStudio" placeholder="Studio">
				<input class="sm-form" type="text" name="MovDirector" placeholder="Director"><br><br>
				<input class="submit" type="submit" value="store Into DB">
			</form>
	</div>

	<?php

		include('connection.php');
		$MovID = @$_POST['MovID'];
		$MovName = @$_POST['MovName'];
		$MovLang = @$_POST['MovLang'];
		$MovRating = @$_POST['MovRating'];
		$MovGenre = @$_POST['MovGenre'];
		$MovDuration = @$_POST['MovDuration'];
		$MovDate = @$_POST['MovDate'];
		$MovStudio = @$_POST['MovStudio'];
		$MovDirector = @$_POST['MovDirector'];

		$check = "SELECT * FROM movies WHERE MovID = '".$MovID."'";
		$resultCheck = mysqli_query($con, $check);
		if(!$resultCheck)
		{
			die(mysqli_connect_error($con));
		}
		else
		{
			
			if(mysqli_num_rows($resultCheck) == 0)
			{
				
				$query = "INSERT INTO Movies VALUES('".$MovID."','".$MovName."', '".$MovLang."', '".$MovRating."','".$MovGenre."','".$MovDuration."','".$MovDate."','".$MovStudio."','".$MovDirector."')";
				
				$resultInsert = mysqli_query($con, $query);
				
				if(!$resultInsert)
				{
					
					die(mysqli_error($con));
				}
				else
				{

					echo"Record has been added";
				}
			}
			else
			{
				echo "Record already existed";
			}
		}
	?>
	<!-- end content-->
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>
	

</body>
</html>