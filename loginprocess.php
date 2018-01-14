<html>
<head>
	<style>
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');
</style> 
</head>
<body>

<body style="background-color:#ffe207;">
<a href="index.php">
<br>
<br>
<center><img src="src/logo.png" alt="logo" width="180" height="60">
</a></center>
<br>
<br>

<?php
$userID =$_POST['userID'];
$userPwd =$_POST['userPwd'];

include('connection.php');


$queryCheck = "select * from USERS where UserID = '".$userID."'";

$resultCheck = mysqli_query($con, $queryCheck); //assign query result to a variable

if(!$resultCheck) //to check if query result IS NOT OK
{
	die ("Invalid Query 1: ".mysqli_error($con));
}
else
{
	if(mysqli_num_rows($resultCheck) == 0){?>
		<center><h2>User ID does not exist</h2></center>
		<h2><center>Please <a href="login.html">log in </a>again</center><h2><?php
	}
	else
	{
		$row=mysqli_fetch_array($resultCheck,MYSQL_BOTH);
		
		if ($row ["UserPassword"] == $userPwd){
			session_start();
			
			$_SESSION["UID"] = $userID;
			
			header ("location:index.php");
		}
		else
		{
		?>
			<h2><center>wrong password!!!!</center><h2>
			<h2><center>Please <a href="login.html">log in </a>again</center><h2><?php
		}
	}

}

	mysqli_close($con);
	

?>


</body>
</html>