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
			<li><a href="index.html">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

<div id="left-sidenav" class="sidenav">

	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="chooseRecord.php">Delete record</a>
	<a href="editRecord.php">Edit record</a>
	<a href="add.php">Add record</a>
	
</div>
<br><br>
<div class="rotate" id="rotate-bar">
	<span onclick="openNav()" style="transform: rotate(240deg);">&#9776; </span>
	<span onclick="openNav()"><!--burger icon--> System </span>
</div>


	<?php
		}
		else
		{
	?>
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
		echo "Permission denined";
		}
	?>
	<!-- content -->
	
	<!-- end content -->
	<script>
		function openNav() {
    		document.getElementById("left-sidenav").style.width = "15%";
		}

		function closeNav() {
    		document.getElementById("left-sidenav").style.width = "0";
		}
	</script>
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>
	
</body>
</html>