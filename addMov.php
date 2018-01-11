<?php

		include('connection.php');
		$MovID = @$_POST['MovID'];
		$MovName = @$_POST['MovName'];
		$MovLang = @$_POST['MovLang'];
		$MovRating = @$_POST['MovRating'];
		$MovGenre = @$_POST['MovGenre'];
		$MovDuration = @$_POST['MovDuration'];
		$MovDate = @$_POST['MovDate'];
		$MovStudio = @$_POST['MovStudio'];
		$MovDirector = @$_POST['MovDirector'];

		$check = "SELECT * FROM movies WHERE MovID = '".$MovID."'";
		$resultCheck = mysqli_query($con, $check);
		if(!$resultCheck)
		{
			die(mysqli_error($con));
		}
		else
		{
			
			if(mysqli_num_rows($resultCheck) == 0)
			{
				
				$query = "INSERT INTO Movies VALUES('".$MovID."','".$MovName."', '".$MovLang."', '".$MovRating."','".$MovGenre."','".$MovDuration."','".$MovDate."','".$MovStudio."','".$MovDirector."')";
				
				$resultInsert = mysqli_query($con, $query);
				
				if(!$resultInsert)
				{
					
					die(mysqli_connect_error($con));
				}
				else
				{

					echo"Record has been added";
				}
			}
			else
			{
				echo "Record already existed";
			}
		}
		


	?>