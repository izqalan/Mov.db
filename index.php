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
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
            
		<ul>
			<li><a href="profile.php"><?php echo $_SESSION["UID"]; ?></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="chooseRecord.php">Lists</a></li>
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
			<option value="name">Name</option>
			<option value="lang">Language</option>
			<option value="rate">Rating</option>
			<option value="genre">Genre</option>
			<option value="studio">Studio</option>
			<option value="director">Director</option>
		</select>
		<input class="submit" type="submit" name="submit" value="search"/>
	</form>
	
	
	<!-- end content -->
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>
	
</body>
</html>