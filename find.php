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
</head>
<body>
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.php">Lists</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>
	
	<form class="animated zoomIn big-search" id="searchForm" method="post" action="find.php">
		<input class="search" id="searchText" type="text" name="search" placeholder="search database" />
		<select id="select" name="select" class="sm-select">
			<option value="MovName">Name</option>
			<option value="MovLang">Language</option>
			<option value="MovRating">Rating</option>
			<option value="MovGenre">Genre</option>
			<option value="MovStudio">Studio</option>
			<option value="MovDirector">Director</option>
		</select>
		<input class="submit" type="submit" name="submit" value="search"/>
	</form>

	<?php
	include('connection.php');
	if(isset($_POST['search'])){
		$searchq = $_POST['search'];
		$option = $_POST['select'];
		
		$queryNumRow = "SELECT * FROM movies WHERE ".$option." LIKE '%".$searchq."%'";
		$resultRow = mysqli_query($con, $queryNumRow);
		$counter = 0;
		$offset = 0;
		
		while($counter < $numrows = mysqli_num_rows($resultRow)/1.5){
		
		
		echo("<table>");?>
		<tr> <?php
		$query = mysqli_query($con, "SELECT * FROM movies WHERE ".$option." LIKE '%".$searchq."%' limit 2 offset ".$offset."") or die();
		
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$poster="poster/".$row['MovID'].".jpg";
			?>
			<td>
				<div class="mid">
					<?php echo "<img src='".$poster."' width='200px' height='300px'>";?>
				</div></td>
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
	}
	?>
	
</body>
</html>