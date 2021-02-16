<?php
 
	if(isset($_POST['submit']))
	{

		$checkbok1 		= $_POST['skills'];

		if($_POST['submit'] == "submit")
		{
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
?>