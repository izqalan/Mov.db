<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
	<marquee behavior="scroll" direction="left"><h3> WELCOME, Mov.db <?php echo $_SESSION["UID"];?> </h3></marquee>
	<?php
		}
		else
		{
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
	?>
	<!-- content -->
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
	
	</form>
	
	<div class = "poster1">
		<a href="">
			<img src="poster/1.jpg" width="200px" height="300px">
		</a>
	</div>
	
	<div class= "poster2">
		<a href="">
			<img src="poster/2.jpg" width="200px" height="300px">
		</a>
	</div>
	
	<div class= "poster3">
		<a href="">
			<img src="poster/3.jpg" width="200px" height="300px">
		</a>
	</div>
	
	<div class= "poster4">
		<a href="">
			<img src="poster/4.jpg" width="200px" height="300px">
		</a>
	</div>
	
	<div class= "poster5">
		<a href="">
			<img src="poster/5.jpg" width="200px" height="300px">
		</a>
	</div>
	
	<!-- end content -->
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>
	
</body>
</html>