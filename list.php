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
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<style>
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');
</style> 
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
			<li><a href="profile.php"><?php echo $_SESSION["UID"]; ?></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.php">Lists</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<?php
		}
	else{ ?>
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
	
		
		$queryNumRow = "SELECT * FROM movies";
		$resultRow = mysqli_query($con, $queryNumRow);
		$counter = 0;
		$offset = 0;
		
		while($counter < $numrows = mysqli_num_rows($resultRow)/1.5){
		
		
		echo("<table>");?>
		<tr> <?php
		$query = mysqli_query($con, "SELECT * FROM movies limit 2 offset ".$offset."") or die();
		
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$poster="poster/".$row['MovID'].".jpg";
			?>
			<td>
				<div class="mid">
					<?php echo "<img src='".$poster."' width='200px' height='300px' alt='This is a movie poster'>";?>
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
			<td><div class="next"></div></td><?php
		}?>
		</tr><tr><br></tr><?php $offset += 2;
		$counter++;
		}
		
		echo "</table>";
		?></div>
		<?php
	
	?>
	
</body>
</html>