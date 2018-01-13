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
		session_start();
		if(isset($_SESSION['UID']))
		{


	?>
	<!--Admin-->
	<div class="navbar">
		<a href="index.html">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>

		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<marquee behavior="scroll" direction="left"><h3> WELCOME, Mov.db <?php echo $_SESSION["UID"];?> </h3></marquee>
	<?php
		// izqalan-fixed
		include('connection.php');

		$MovID = $_POST['MovID'];
		if(is_null($MovID))
		{
			header("location: chooseRecord.php");
		}

		//connect succesfully
		//to get data/records from a table
		$queryDelete = "delete from movies where MovID = '".$MovID."' ";
		$resultDelete = mysqli_query($con, $queryDelete);
		//assign query result to a variable
		if(!$resultDelete) //to check if query result IS NOT
		{
			die ("Invalid Query".mysqli_error($con));
		}
		else
		{	//query result is OK
			echo "Record has been deleted ";
			//header("location:chooseRecord.php");
		}

	?>
	<?php
		}
		else
		{
	?>
	<!--normie-->
	<div class="navbar">
		<a href="index.html">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>

		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="login.html">Login</a></li>
		</ul>
	</div>
	<?php
		}
	?>
	<!-- content -->

	<!-- end content -->
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>

</body>
</html>

<html>
<body>

<br><br>
Click <a href = "chooseRecord.php"> go back </a></br>
</body>
</html>
