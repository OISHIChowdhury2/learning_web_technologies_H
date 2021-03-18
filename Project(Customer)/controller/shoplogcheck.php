
<?php
	session_start();

	if(isset($_POST['submit'])){

		$shop = $_POST['shop'];
		$password = $_POST['password'];

		if($shop == "" || $password == "")
		{

			echo "Please Enter username and password";
		}
	

		else
		{
			$user = $_SESSION['current_user'];

			if($shop == $user['shop'] && 
				$password == $user['password'] )
			{
				$_SESSION['flag'] = true;
				header('location: ../view/dokan.php');
			}
			else
			{
				echo "Please register yourself first with a strong password";
			}
		}

	}
?>
