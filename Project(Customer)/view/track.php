<?php
	$title= "Home Page";
	include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Unite shoping mart</title>
</head>
<body>

	
     <table align="center" border="2" width="60%" hight="100%">
      <tr>
      	<td align="right">
      		<a href="track.php">TRACK ORDER</a>
	<a href="#">COSTOMER CARE</a>
</td>
</tr>

<td>

      	<table border="2" width="100%" hight="100%"  >
      		
       	<tr  >
       		
       	</tr>
       	<tr >
       	
       		<td rowspan="2" height="280px" width="20%" >

       			<img src="../pic/unitlogo.jpeg" height="130px" width="240px" border="1">
       		
       				 <a href ="#">Electronic Devices</a><br>
<a href ="#">Electronic_Accessories</a><br>
<a href ="#">TV_&_Home_Appliances</a><br>
	<a href ="#">Health & Beauty</a><br>
	<a href ="#">Babies & Toys</a><br>
	<a href ="#">Groceries & Pets</a><br>
	<a href ="#">Home & Lifestyle</a><br>
	<a href ="#">Women's Fashion</a><br>
	<a href ="#">Men's Fashion</a><br>
	<a href ="#">Watches & Accessoriess</a><br>
       			
</td>

<td align="center">
	<form action="search.php">
	 <input type="text" placeholder="Search.." >

	 <button>
	 <i class="fab fa-searchengin"></i>
	</button>
</form>
</td>

<td align="right">
	<form action="costomer.php" >
		<a href="costomer.php"><b>Welcome Dear, <?php echo $_SESSION['current_user']['username'];?></a></b>
	</div>
	</form>
</td>

</tr>

<td colspan="2" >
	<img src="../pic/unitlogo.jpeg" height="300px" width="100%"  border="1">
</td>

</table>
<tr>
<td>
	<table align="center" style="background-color: #834AA1">
		<tr>
			<td >
				<label>ORDER #Y34XDHR
</label></td>
<td align="right">
	<label>Expected Arrival
</label>
<br>
<label> 01/4/2021
</label>
<br>
<label>
USPS 234094567242423422898
</label>
</td>
</tr>
<tr>
	<td colspan="2">


<?php

	$myfile = fopen('../jeson/track.json', 'r');
	$data = fread($myfile, filesize('../jeson/track.json'));
	
	$user = json_decode($data, true);
	print_r($user);

	
?>


</ol>
</td>
</tr>




	</table>
<tr>
	<td align="right">
		<form action="home.php">
			<input type="submit" value="Back" >
		</form>

       		</td>
       	</tr>

       </table>

<footer  style="background: pink ">
	<table align="center"  width="60%" hight="100%" >
		<tr>
			<td align="center" >
	<label>	<b>	Customer Care</b></label>
	<br>
	<a href="#" >Help Center</a><br>
	<a href="#">How to Buy</a><br>
	<a href="#">Track Your Order</a><br>
	<a href="#">Returns & Refunds</a><br>
	<a href="#">Contact Us</a><br>
</td>

<td align="center">
<label><b>	Earn With unit</b></label>
	<br>
	<a href="#">Sell on</a><br>
	<a href="#">Code of Conduct</a><br>
	<a href="#">Track Your Order</a><br>
	<a href="#">Taking a shop in unit</a><br>

	</td>
	<tr>
		<td align="center">
<label><b>	Unit</b></label>
	<br>
	<a href="#">About</a><br>
	<a href="#">Digital Payments</a><br>
	<a href="#">Terms & Conditions</a><br>
	<a href="#">Privacy Policy</a><br>
	<a href="#">App</a><br>




		</td>
	</tr>
</table>

</footer> 
</body>
</html>
		
	</div>


