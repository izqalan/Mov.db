<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Copy paste this template into a new file -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/box.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css"></style>
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
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>
	
	<?php
	include('connection.php');

	echo $detail=@$_POST['detail'];
	$MovID = @$_POST['MovID'];
	$MovName = @$_POST['MovName'];
	$MovLang = @$_POST['MovLang'];
	$MovRating = @$_POST['MovRating'];
	$MovGenre = @$_POST['MovGenre'];
	$MovDuration = @$_POST['MovDuration'];
	$MovDate = @$_POST['MovDate'];
	$MovStudio = @$_POST['MovStudio'];
	$MovDirector = @$_POST['MovDirector'];
	
	$query = mysqli_query($con, "SELECT * FROM movies WHERE MovID='".$_POST['MovID']."'") or die();
		
	$poster="poster/".$row['MovID'].".jpg";
	?>
		<div class="mid">
			<?php echo "<img src='".$poster."' width='200px' height='300px'>";?>
		</div>
	
	
</body>
</html>