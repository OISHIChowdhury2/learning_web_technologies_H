


<?php
if (isset($_POST['submit']))
 {
	$user=$_POST['username'];

	if (strlen($user)<8)
	{
		echo "stong password";
	}
	# code...

		# code...
	
	else {
		echo "weak password";
		# code...
	}
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>LOGIN</legend>
			<label > User Naame</label>
			<input type="text" name="username" value="" required="">
			<br>
			<br>
			<label>Password</label>
			<input type="password" name="password" value="">
			<br>
			<input type="checkbox" ><span>Remember Me</span>
			<br>
			<br>
			<input type="submit" name="submit">
			<a href="forgot.php">Forgot Password?</a>


		</fieldset>
	</form>

</body>
</html>