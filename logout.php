<html>
</body>



<body style="background-color:#ffe207;">
<a href="index.php">
<br>
<br>
<center><img src="src/logo.png" alt="logo" width="180" height="60"></center>
</a>
<br>
<br>

<?php
session_start();
if (isset ($_SESSION["UID"]))
{
	session_destroy();
	 ?>
	
	<h2><center>You have successfully logged out.</h2>
	<h3><center>Go back to <a href="index.php">main page</a></center><h3>

<?php	
}
else
{
?>
	
	<h2><center>No session exists or session is expired.</center></h2>
	<h3><center>Please <a href="login.html">log in </a>again</center><h3>
<?php	
}
?>


</body>
</html>

