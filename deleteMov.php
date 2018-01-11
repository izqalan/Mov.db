<html>
<body>
<?php
// izqalan-fixed
include('connection.php');
$MovID = $_POST['MovID'];
//connect succesfully
//to get data/records from a table
$queryDelete = "delete from movies where MovID = '".$MovID."' ";
$resultDelete = mysqli_query($con, $queryDelete);
//assign query result to a variable
if(!$resultDelete) //to check if query result IS NOT
{
	die ("Invalid Query 1: ".mysqli_error($con));
}
else
{	//query result is OK
	echo "Record has been deleted ";
	header("location:menu1.php")
}

?>
<br><br>
Click <a href = "index.html"> View Admin Page </a></br>
</body>
</html>