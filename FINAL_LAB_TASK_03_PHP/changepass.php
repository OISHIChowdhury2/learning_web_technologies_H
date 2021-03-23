<?php
session_start();
$id = $_SESSION["id"];
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from users WHERE username='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["repass"] == $row["password"] && $_POST["newPassword"] == $row["crepass"] ) {
mysqli_query($con,"UPDATE users set password='" . $_POST["newPassword"] . "' WHERE username='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Changing password</title>
</head>
<body>
	<table>
		<tr>
			<td align="center">
		<table>
			<tr>
				<td>
	
              <form method="POST">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			
			<table>	
			<tr>
				<td>
			<label >Current password</label></td>
			</tr>
			<tr>
			<td><input type="password" name="current_password" value="" required="true"></td>
		</tr>
		<tr>
			<td>
			
			<label>New Password</label>
		</td>
		</tr>
		<tr>
		<td>
			<input type="password" name="new_password" value="" required="">
		</td>
	</tr>
	<tr>
		<td>
			
			<label>Retype New Password</label></td>
			<td></tr>
				<tr>
			<input type="password" name="retype_password" value="" required=""></td>
		</tr>
			
			
		<tr>
		<td>	
			<input type="submit" name="submit" value="Save"></td>
			<td>	
			<td align="center"><a href="admin.php">Home</a>
		</tr>

	</table>

</body>
</html>