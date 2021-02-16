<?php

	if(isset($_POST['submit']))
	{

		$DOB	= $_POST['dob'];

		if($DOB == " "){
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
?>