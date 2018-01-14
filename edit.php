<!DOCTYPE html>
<html>
<head>
  <?php
  	include('connection.php');
  	$MovID = @$_POST['MovID'];
  	$queryGet = "SELECT * FROM Movies WHERE MovID = '".$MovID."'";
  	$resultGet = mysqli_query($con, $queryGet);

  	
  	if(is_null($MovID))
  	{
    	header("location: chooseEdit.php");
  	}

  	session_start();
  	if(isset($_SESSION['UID']))
  	{

   ?>
	<!-- Copy paste this template into a new file -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="navbar">
		<a href="index.php">
			<img src="src/logow.png" height="30px" alt="mov.db logo" width="100px" >
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
	</div>
	<!-- content -->

	<div class="content">
		<h1>Edit record</h1><br><br>
    <?php while($row = mysqli_fetch_array($resultGet, MYSQLI_BOTH))
    {
      ?>
			<form action="saveEdit.php" method="post">

          <input type="hidden" name="MovID" value="<?php echo $row['MovID'];?>">
  				<input class="sm-form" type="text" value="<?php echo $row['MovName'];?>" name="MovName" placeholder="Title" >
  				<input class="sm-form" type="text" value="<?php echo $row['MovLang'];?>" name="MovLang" placeholder="Language"><br><br>
  				<input class="sm-form" type="text" value="<?php echo $row['MovRating'];?>" name="MovRating" placeholder="Rating">
  				<input class="sm-form" type="text" value="<?php echo $row['MovGenre'];?>" name="MovGenre" placeholder="Genre"><br><br>
  				<input class="sm-form" type="number" value="<?php echo $row['MovDuration'];?>" name="MovDuration" placeholder="Duration">
  				<input class="sm-form" type="date" value="<?php echo $row['MovDate'];?>" name="MovDate" placeholder="Date"><br><br>
  				<input class="sm-form" type="text" value="<?php echo $row['MovStudio'];?>" name="MovStudio" placeholder="Studio">
  				<input class="sm-form" type="text" value="<?php echo $row['MovDirector'];?>" name="MovDirector" placeholder="Director"><br><br>
          <textarea class="sm-textarea" value="<?php echo $row['MovSynopsis'];?>" namme="MovSynopsis" placeholder="Synopsis"></textarea><br><br><br>
  				<input class="submit edit" type="submit" value="store Into DB">

			</form>
      <?PHP } ?>
	</div>
	<!-- end content-->
	<footer class="footer">
		<p style="font-size: 8pt;"><i>© 2017 Izqalan, Nu'man, Yew CS, Wan .E SOME RIGHT RESERVED<i></p>
	</footer>


</body>
</html>
<?php }else{ echo "PERMISSION DENINED";} ?>
