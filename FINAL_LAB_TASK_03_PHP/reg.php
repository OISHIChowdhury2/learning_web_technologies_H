<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>
<?php
    require('db.php');
    
    if (isset($_REQUEST['username'])) {
     
        
        
         $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password, email)
               VALUES ('$username', '" . '$password' . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p>Click here to 
                  <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p>Click here to <a href='reg.php'>reg</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
		<fieldset>
			<legend>Registation</legend>
			<table>

			<tr>
				<td>Id:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="id" value="" required="true">
				</td>
			</tr>

			<tr>
				<td>Password:</td>
			</tr>
			<tr>
				<td>
					<input type="Password" name="password" value="" required="true">
				</td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
			</tr>
			<tr>
				<td>
					<input type="Password" name="repass" value="" required="true">
				</td>
			</tr>
			<tr>
				<td>Name:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="username" value="" required="true">
				</td>
			</tr>
			<tr>
				<td>Email:</td>
			</tr>
			<tr>
				<td>
					<input type="Email" name="email" value="" required="true">
				</td>
			</tr>
			
			<tr>
				<td>
			<form action="" method="get">
		<label for="fname">User Type(User/Admin):</label>
		<tr><td>
  				<select name="">
  		       <option value="">Admin</option>
  		       <option selected value="">User</option>
  		 </select>
  		 </td>
  		 <tr>
  		 	<td>
  		 		 <input type="submit" name="submit" value="Register" class="login-button"></td>
  		 		</tr>
  		<td>
					<a href="loginphp">login</a>
				</td></tr>
				</td>
				
				</tr>
			</table>
    </form>
<?php
}
?>
</body>
</html>