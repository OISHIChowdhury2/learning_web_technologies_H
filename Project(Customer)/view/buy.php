<?php
	$title= "Home Page";
	include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center" border="2" width="60%" hight="100%">
      <tr>
        <td align="right">
          <a href="#">TRACK ORDER</a>
  <a href="#">COSTOMER CARE</a>
</td>
</tr>

<td>

        <table border="2" width="100%" hight="100%"  >
          
        <tr  >
          
        </tr>
        <tr >
        

<td colspan="2" >
  <img src="../pic/unitlogo.jpeg" height="300px" width="100%"  border="1">
</td>
	<table border="1" align="center" width="50%">
		<tr>
			<td>
				<label>items</label>
				<br>

<input type="text" name="items">
<br>

<?php
$jsonobj = '{"Price":307,"quantity":1}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

</td>
<td>
	<label>Shipping and Billing</label>
	<br>
	<br>
	<?php echo $_SESSION['current_user']['username'];?>
	<br>
	<label>Order Summary</label>
	<br>
	<label>SubTotal   307</label>
	<br>
	<label>Shipping Fee   20</label>
	<br>
	<label>Total   327</label>

	<form action="payment.php">
		<input type="submit" value="proceed to pay">
	</form>

	</table>

</body>
</html>