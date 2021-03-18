<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == "" ||strlen($password<8))
		{

			echo "Please Enter username and password";
		}
	

		else
		{
			$user = $_SESSION['current_user'];

			if($username == $user['username'] && $password == $user['password'] )
			{
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}
			else
			{
				echo "Please register yourself first with a strong password";
			}
		}

	}
?>
