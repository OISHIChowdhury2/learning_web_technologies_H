
<?php

     if (isset($_POST['gender'])) {

       echo 'Thank You.......';

     } else {

       echo 'Invalid request..Please selete one';

     }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="next.php" method="POST">

		<fieldset><legend>Gender </legend>

     <input type="radio" name="gender">Male
       <input type="radio" name="gender">Female
       <input type="radio" name="gender">Other
<input type="submit" name="submit">
</fieldset>
</form>


</body>
</html>