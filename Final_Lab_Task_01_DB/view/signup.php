<?php
include(reCheck.php) 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<form method="post" action="../controller/regCheck.php">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $username; ?>">"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $password; ?>"> </td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" value="<?php echo $repass; ?>" ></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $email; ?>"</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Submit"> 
						<a href="login.php">Login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>