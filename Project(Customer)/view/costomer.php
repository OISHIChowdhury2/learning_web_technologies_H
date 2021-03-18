<?php
	$title= "costomer Page";
	include('header.php');
?>



     <table align="center" border="2" width="60%" hight="100%">
      <tr>
      	<td>
      		
        <td align="right">
          <a href="track.php">TRACK ORDER</a>
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
<td colspan="3">


    <table  width="50%" align="center" style="background: #DBEAE8">
      <tr>
        <td>USERNAME</td>
        <td>OISHI</td>
      </tr>
      <tr>
        <td>
        EMAIL</td>
        <td>oishichowdhury2@gmail.com</td>
      </tr>
      <tr>
        <td>PASSWORD</td>
        <td>********</td>
      </tr>
      <tr>
        <td>PHONE</td>
        <td>01799308014</td>
      </tr>
      <tr>
    <td>ADDRESS</td>
    <td>Utoor Ibrahim pur Dhaka</td>
    <tr>
   <td align="right" colspan="2">
    
    <a href="edit.php">Edit</a>||
          <a href="delete.php">Delete</a>||
          <a href="booking.php">Booking</a>
        </td>
       </tr>
  </tr>
  <tr>
    <td>
      <br>
      <br>
      <table>
        <form action="manag.php">
      
            <table  width="160%">
              <tr>
                <td>
                Order#</td>
                <td>Placed Date</td>
                <td>Items</td>
                <td >Total price</td>

              </tr>

             <tr>
                   <td>
               6135393329852</td>
                <td>10/03/2021</td>
                <td>Book</td>
                <td>550tk</td>
               <td> <a href="manag.php">Manage</a></td>
             </tr>


          </fieldset>
        </form>
        

      </table>
    </td>
  </tr>
      


    </table>

 


<div id='nav_bar' align="right">
		<a href="signup.html"> Create New account</a> |
		<a href="index.html">Logout</a>|	
		<a href="home.php"> Back</a>	
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
