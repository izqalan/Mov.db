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
			<li><a href="index.php">Home</a></li>
			<li><a href="list.php">Lists</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

<div id="left-sidenav" class="sidenav">

	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;<!--multiplication code--></a>
	<a href="chooseRecord.php">Delete record</a>
	<a href="chooseEdit.php">Edit record</a>
	<a href="add.php">Add record</a>
	
</div>
<br><br>
<div class="vertical" id="rotate-bar"> <!-- passs id to js to open the sidebar-->
	<span class="animated fadeInLeft" onclick="openNav()">&#9776;<!--burger icon-->Database Access </span>
</div>
	
	<!-- start here -->
	<?php
	include('connection.php');
	$queryGet = "select * from movies";
	$resultGet = mysqli_query($con, $queryGet);


	if(!$resultGet)
	{
	die ("Invalid Query 1: ".mysqli_error($con));
	}
	else
	{
		$queryGet = "select * from movies";
		$resultGet = mysqli_query($con, $queryGet);
?>
<center>
<form>
	
<table>


<tr><th>MovID</th><th> MovName </th><th> MoveLang </th><th> MovRating</th><th>MovGenre</th><th>MovDuration</th><th>MovDate</th><th>MovStudio</th><th>MovDirector</th></tr>
<?php

while($row = mysqli_fetch_array($resultGet,MYSQLI_BOTH)) {
?>

	<tr>
		
		<td><?php echo $row['MovID'];?></td>
		<td><?php echo $row['MovName'];?></td>
		<td><?php echo $row['MovLang'];?></td>
		<td><?php echo $row['MovRating'];?></td>
		<td><?php echo $row['MovGenre'];?></td>
		<td><?php echo $row['MovDuration'];?></td>
		<td><?php echo $row['MovDate'];?></td>
		<td><?php echo $row['MovStudio'];?></td>
		<td><?php echo $row['MovDirector'];?></td>
		
	</tr>

	<?php } ?>
	</table>
	<br>
</form>
</center>
	<?php
		}
		}
		else
		{
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