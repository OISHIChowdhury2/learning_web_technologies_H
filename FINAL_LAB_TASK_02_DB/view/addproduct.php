<?php



?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD Product</title>
</head>
<body>
<form method="post" action="../controller/regCheck.php">
	<table align="center">
	<tr>
	<td>
	<form>
		<fieldset>
			<legend>ADD PRODUCT</legend>
		
	
	<table >
		<tr>
			<td>
      <label>NAME</label>
			</td>
		</tr>
		<tr>
			<td>
		<input type="text" name="proname">
</td>
</tr>
<tr>
	<td>
		<label>Buying Price</label>
	</td>
</tr>
<tr>
			<td>
		<input type="text" name="buyprice">
</td>
</tr>

<tr>
	<td>
		<label>Selling Price</label>
	</td>
</tr>
<tr>
			<td>
		<input type="text" name="sellprice">
</td>
</tr>
<tr>
	<td>
		<input type="checkbox" name="Display">Display
	</td>
</tr>
<tr>
	<td>
		<form method="POST" action="Display.php">
		<input type="submit" name="save" value="Save">
</form>
</td>
</tr>
	</table>
</fieldset>
</form>
</td>
</tr>
</table>
</form>

</body>
</html>