<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$address=$_POST['address'];

		if($username == "" || $email == ""  || $address == ""|| $password == "" || $repass == "" ){
			echo "null submission...";
		}
		else{

			if($password == $repass){

				$user = [	
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email,
							'address'=>$address
						];

				
				$_SESSION['current_user'] = $user;

				header('location: ../view/login.html');
			}
			else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>