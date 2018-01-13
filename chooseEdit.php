<html>
<head>
<center>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="table.css">
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
	<marquee behavior="scroll" direction="left"><h3> WELCOME, Mov.db <?php echo $_SESSION["UID"];?> </h3></marquee>
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
?>
<form name ="editForm" action="edit.php" method="post">

	<input class="submit edit" type ="submit" class="submit" value = "Edit" >
  <br><br>
<table>


<tr><th>Choose</th><th>MovID</th><th> MovName </th><th> MoveLang </th><th> MovRating</th><th>MovGenre</th><th>MovDuration</th><th>MovDate</th><th>MovStudio</th><th>MovDirector</th></tr>
<?php

while($row = mysqli_fetch_array($resultGet,MYSQLI_BOTH)) {
?>

	<tr>
		<td><input type="radio" name="MovID" value="<?php echo $row['MovID'];?>"</td>
		<td><?php echo $row['MovID'];?></td>
		<td><?php echo $row['MovName'];?></td>
		<td><?php echo $row['MovLang'];?></td>
		<td><?php echo $row['MovRating'];?></td>
		<td><?php echo $row['MovGenre'];?></td>
		<td><?php echo $row['MovDuration'];?></td>
		<td><?php echo $row['MovDate'];?></td>
		<td><?php echo $row['MovStudio'];?></td>
		<td><?php echo $row['MovDirector'];?></td>
</td>
	</tr>

	<?php } ?>
	</table>
	<br>
</form>
<?php
}



		}
		else
		{
	?>
	<div class="navbar">
		<a href="index.php">
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

</center>
</body>
</html>
