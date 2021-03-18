<?php
	$title= "Edit Page";
	include('header.php');

?>



     <table align="center" border="2" width="60%" hight="100%">
      <tr>
      
      		
        <td align="right">
          <a href="#">TRACK ORDER</a>
        <a href="#">COSTOMER CARE</a>
</td>
  <td align="right">
  <div id="page_title">
  <label><b>Welcome Dear <?php echo $_SESSION['current_user']['username'];?></label></b>
</div>
</td>
</tr>

<td colspan="3">
        <table border="2" width="100%" hight="100%" >
          
       
        <tr >
        
          <td rowspan="2" height="300px" width="20%" >

            <img src="../pic/unitlogo.jpeg" height="110px" width="250px" border="1">
          
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
                     

<td align="center" height="10%">
  <form >
   <input type="text" placeholder="Search.." >
</form>
</td>
<tr>

<td colspan="2" >
  <img src="../pic/unitlogo.jpeg" height="300px" width="100%"  border="1">
</td>
</tr>

<tr>
<td colspan="3" align="center" >
  
   



	<div id="main_content">
		<table align="center"  width="50%">
			<tr>
				<td style="background-color: #F0E5B9">
		
		<form method="post" action=""  >
			<fieldset>
				<legend>Edit your proflie</legend>
				<table align="center">
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="Oishi"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="123"> </td>
					</tr>
				
				<tr>
						<td>Phone</td>
						<td><input type="number" name="number" value="01799305045"> </td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="oishichowdhury2@gmail.com"> </td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="area" name="Address" value="uttor ibrahim pur"></td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td align="right">
							<br>
							<input type="submit" name="signup" value="Update">
						</td>


					</tr>
				</table>
			</fieldset>
		</form>
	</div>

</td>
</tr>
</table>


 
<div id='nav_bar' align="right">
	<b>	<a href="costomer.php"> Back</a> </b>| |
		<b><a href="index.html"> Logout</a></b>	
	</div>
     </td>

 </td>

  

</tr>
</table>
</td>
</label>
</div>
</td>
</td>
</tr>
</table>

<footer  style="background: pink " >
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











