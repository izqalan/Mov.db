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
	<?php
		include('connection.php');
		session_start();
		if(isset($_SESSION['UID']))
		{


	?>
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="admin.php"><?php echo $_SESSION["UID"]; ?></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
<center><h2><a href="chooseEdit.php" style=" text-decoration: none;">Go back</a></h2></center>
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

		$queryset = "UPDATE movies set MovName = '".$MovName."', MovLang = '".$MovLang."', MovRating = '".$MovRating."', MovGenre = '".$MovGenre."', MovDuration = '".$MovDuration."', MovDate = '".$MovDate."', MovStudio = '".$MovStudio."', MovDirector = '".$MovDirector."' where MovID = '".$MovID."'";

		$resultGet = mysqli_query($con, $queryset);
			if(!$resultGet)
			{
				die("Invalid Query ".mysqli_error($con));
			}
			else
			{
				echo "Record has been updated";
			}
		}
		else{
	?>
	<div class="navbar">
		<a href="index.html">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.php">Lists</a></li>
			<li><a href="login.html">Login</a></li>
		</ul>
	</div>

	<?php
		echo "Permission denined";
		}
	?>
	<!-- content -->
	
	<!-- end content -->
	
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>
	
</body>
</html>