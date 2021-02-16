<?php
	
	
	if(isset($_POST['submit']))
	{
		$Email		= $_POST['myname'];
		if($Email == ""){
			echo "null submission";
		}else{
			echo "Email=".$Email;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="email" name="myname" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>