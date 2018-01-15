<!DOCTYPE html>
<html>
<head>
	<!-- Copy paste this template into a new file -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/animate.css"></style>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['UID']))
		{


	?>
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.php">Lists</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<?php 
		}else{
	?>
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.php">Lists</a></li>
			<li><a href="login.html">Login</a></li>
		</ul>
	</div>
	
	<?php
}
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
	
	$query = mysqli_query($con, "SELECT * FROM movies WHERE MovID ='1' ") or die();
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$poster="poster/".$row['MovID'].".jpg";
	?><table>
			<td>
				<div class="mid-MovDet">
					<?php echo "<img src='".$poster."' width='300px' height='450px'>";?>
				</div>
			</td>
			<td>
				<div class="mname">
					<p><?php echo $row['MovName'];?></p>
				</div>
				<div class="msyn-MovDet">
					<ul>
						<li>Language: <?php echo $row['MovLang'];?></li>
						<li>Rating: <?php echo $row['MovRating'];?></li>
						<li>Genre: <?php echo $row['MovGenre'];?></li><br>
					</ul>
					<ol>
						<li>Synopsis:<br><?php echo ($row['MovSynopsis']);?></li>
					</ol>
					
				</div>
			</td>
			<td><div class="next"></div></td>
	</table>

<center><br><br><br>
	<h1>Trailer</h1>
	<video width="360" controls>
		<?php echo "<source src='video/1.mp4' type='video/mp4'>"; ?>
	</video>
</center>

</body>
</html>