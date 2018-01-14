<?php 
	session_start();
	if(isset($_SESSION['UID']))
	{
		
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Copy paste this template into a new file -->
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
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="profile.php"><?php echo $_SESSION["UID"]; ?></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.php">Lists</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
	</div>
	<!-- content -->
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
	<div class="content">
		<h1>Online Film Registration</h1><br><br>
			<form action="addMov.php" method="post">
				<input class="sm-form" type="text" name="MovID" placeholder="Movie ID">
				<input class="sm-form" type="text" name="MovName" placeholder="Title">
				<input class="sm-form" type="text" name="MovLang" placeholder="Language"><br><br>
				<input class="sm-form" type="text" name="MovRating" placeholder="Movie Rating">
				<input class="sm-form" type="text" name="MovGenre" placeholder="Genre"><br><br>
				<input class="sm-form" type="number" name="MovDuration" placeholder="Duration">
				<input class="sm-form" type="date" name="MovDate" placeholder="Date released"><br><br>
				<input class="sm-form" type="text" name="MovStudio" placeholder="Studio">
				<input class="sm-form" type="text" name="MovDirector" placeholder="Director"><br><br>
				<textarea class="sm-textarea" name="MovSynopsis" placeholder="Synopsis" ></textarea>
				<input class="submit edit" type="submit" value="store Into DB">
			</form>
	</div>
	<!-- end content-->
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
<?php }else{ echo "PERMISSION DENINED";} ?>

