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
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>
	
	<?php
	include('connection.php');

	$detail = @$_POST['detail']; /* huh ? what is zis ? why did it work ? */
	$MovID = @$_POST['MovID'];
	$MovName = @$_POST['MovName'];
	$MovLang = @$_POST['MovLang'];
	$MovRating = @$_POST['MovRating'];
	$MovGenre = @$_POST['MovGenre'];
	$MovDuration = @$_POST['MovDuration'];
	$MovDate = @$_POST['MovDate'];
	$MovStudio = @$_POST['MovStudio'];
	$MovDirector = @$_POST['MovDirector'];
	
	$query = mysqli_query($con, "SELECT * FROM movies WHERE MovID ='".$_POST['detail']."'") or die();
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$poster="poster/".$row['MovID'].".jpg";
	?>
			<td>
				<div class="mid">
					<?php echo "<img src='".$poster."' width='200px' height='300px'>";?>
				</div>
			</td>
			<td>
				<div class="mname">
					<p><?php echo $row['MovName'];?></p>
				</div>
				<div class="msyn">
					<ul>
						<li>Language: <?php echo $row['MovLang'];?></li>
						<li>Rating: <?php echo $row['MovRating'];?></li>
						<li>Genre: <?php echo $row['MovGenre'];?></li><br>
					</ul>
					<ol>
						<li>Synopsis:<br><?php echo substr($row['MovSynopsis'], 0, 120);?>...</li>
					</ol>
					<div class="mor">
						<form action="moviedetail.php" method="POST">
						<input type="hidden" name="detail" value=<?php echo $row['MovID']?>>
						<input type="submit" value="More Info..">
						</form>
					</div>
				</div>
			</td>
	
</body>
</html>