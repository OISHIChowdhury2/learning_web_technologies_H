<?php
	
	
	if(isset($_POST['submit']))
	{
		$email		= $_POST['myname'];
		if($email == ""){
			echo "null submission";
		}else{
			echo "success...";
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
			<legend>EMAIL</legend>
			email: <input type="email" name="myname" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>