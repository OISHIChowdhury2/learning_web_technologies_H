<?php
	$title= "Create Page";
	include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<table align="center" border="2" width="60%" hight="100%">
      
<td>
      	<table border="2" width="100%" hight="100%"  >
  <tr>   				     			
</td>

<td align="center">
	<form action="search.php">
	 <input type="text" placeholder="Search.." >

	 <button>
	 <i class="fab fa-searchengin"></i>
	</button>
</form>
</td>

</tr>

<td colspan="2" >
	<img src="../pic/unitlogo.jpeg" height="300px" width="100%"  border="1">
</td>


 <table align="center">
 	<tr>
 		<td>
 

	<div id="page_title">
		<h1>Create Page</h1>
	</div>

	

		<form method="post" action="">
			<fieldset>
				<legend>Create New</legend>
				<table style="background-color: #BAD4CB">
					<tr>
		
						<td>Shop Name</td>
						<td><input type="text" name="username" value=""> </td>
					</tr>
					
					<tr>
						<td>phone</td>
						<td><input type="number" name="number" value=""> </td>
					</tr>
					<tr>
						<td>Product Name</td>
						<td><input type="text"  value=""> </td>
					</tr>
					<tr>
						<td colspan="2">
						<label>Available Color</label>
						  <br>  
						
							<input type="radio"  name="color" value="Red">
  Red<br>
  <input type="radio"  name="Blue" value="Blue">Blue
<br>  
  <input type="radio"  name="yellow" value="yellow">yellow
  <br>

  <input type="radio"  name="green" value="green">Green
  <br>
</td>
<tr>
	<td colspan="2">
		<form a>
  <input type="file"  value="">
</form>
</td>
</tr>
					</tr>
					<tr>
						<td colspan="2" align="right" >
							<input type="submit" name="signup" value="Create">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

		<div align="right">
		<a href="signup.html"> Back</a> |
		<a href="index.html"> logout</a>	
	</div>
	</div>
</td>
</tr>
</table>

</table>



</form>
</td>
</tr>
</table>
	</form>


</td>
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

</footer> 
</body>
</html>