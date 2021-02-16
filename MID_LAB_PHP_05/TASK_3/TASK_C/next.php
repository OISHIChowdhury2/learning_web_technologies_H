<?php
	
	if(isset($_POST['submit']))
	{
		$Date_Of_Birth_Day= $_POST['dob'];
		if($Date_Of_Birth_Day == ""){
			echo "null submission";
		}else
		{
			echo "success:".$Date_Of_Birth_Day;
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Date_Of_Birth_Day</legend>
			Date_Of_Birth_Day: <input type="date" name="dob" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>


