<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
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
        
          <td rowspan="2" height="300px" width="20%" >

            <img src="unitlogo.jpeg" height="110px" width="250px" border="1">
          
               <a href ="#">Electronic Devices</a>
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
  <form >
   <input type="text" placeholder="Search.." >
</form>
</td>


</tr>

<td colspan="2" >
  <img src="unitlogo.jpeg" height="300px" width="100%"  border="1">
</td>

<tr>

    <td colspan="3">
      <table border="2" align="center" style="background-color: 
      #C870F9" width="50%">
        <tr>
          <td>
      

 <form onsubmit="return myfun()" name="forms" >
		<fieldset>
			<legend>Registration</legend>
		
					Name: <input type="text" id="myname" value="">  
      <span id="username"></span> <!-- </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""
            required="true"> </td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" value=""
            required="true"> </td> -->
            <br>
            <br>
				Email: <input type="email"  id="myemail" name="email" value="">
      <span id="email"></span>


<br>


<br>
      <label>Gender </label>

     <input type="radio" name="gender">Male
       <input type="radio" name="gender">Female
       <input type="radio" name="gender">Other
       <div><p id="gender"></p></div>

<br>

        <label>User Type</label>
     <input type="checkbox"  name="user">
  <label > ADMIN</label>
  <input type="checkbox"  name="user" >
  <label >SELLER</label>
  <input type="checkbox" name="user" >
  <label >CUSTOMER</label>

  <div id="type"><p></p></div>

		<br>
    		
					Address: <input type="text" id="address" value="">  
      <span id="address"></span>
     

<br>
<br>
						<input type="submit" value="Submit">

					
		</fieldset>
	</form>
</td>
</tr>
</table>

</td>
</tr>
</table>



          </td>
        </tr>

       </table>

<footer  style="background: pink ">
  <table align="center"  width="60%" hight="100%" >
    <tr>
      <td align="center" >
  <label> <b> Customer Care</b></label>
  <br>
  <a href="#" >Help Center</a><br>
  <a href="#">How to Buy</a><br>
  <a href="#">Track Your Order</a><br>
  <a href="#">Returns & Refunds</a><br>
  <a href="#">Contact Us</a><br>
</td>

<td align="center">
<label><b>  Earn With unit</b></label>
  <br>
  <a href="#">Sell on</a><br>
  <a href="#">Code of Conduct</a><br>
  <a href="#">Track Your Order</a><br>
  <a href="#">Taking a shop in unit</a><br>

  </td>
  <tr>
    <td align="center">
<label><b>  Unit</b></label>
  <br>
  <a href="#">About</a><br>
  <a href="#">Digital Payments</a><br>
  <a href="#">Terms & Conditions</a><br>
  <a href="#">Privacy Policy</a><br>
  <a href="#">App</a><br>




    </td>
  </tr>
</table>

</body>
</html>
<script type="text/javascript">
  
function myfun()
  {

    var correct_way=/^[A-Za-z.-]+$/;
    var a= document.getElementById("myname").value;
   
  


   //var e =document.myform.email.value;

    var g= document.forms.gender;

    if(a=="")
    {
      document.getElementById("username").innerHTML="**please fill username ";
      return false;
    }
    

     if(a.length <2)
     {
      document.getElementById("username").innerHTML="**must be more then 2";
      return false;
     }
    


    if(a.match(correct_way))
    
      true;
    
     else {
      document.getElementById("msg").innerHTML="**only alphabets are allowed";
      return false;

     }


// email


    var e= document.getElementById("myemail").value;
 if(e=="")
    {
      document.getElementById("myemail").innerHTML="**please fill email ";
      return false;
    }

    
    if(e.indexOf('@')<=0)
    {
      document.getElementById("myemail").innerHTML="**invalide @ position";
      return false;
    }


  
  for(i=0;i<g.length;i++)
  {
    if(g[i].checked== true)
       return true;
     document.getElementById('gender').innerHTML="Gender: "+g[i].value;


  }
  
  document.getElementById('gender').innerHTML="**please select anyon"
  return false;






var ad= document.forms.degree;
  
  for(i=0;i<ad.length;i++)
  {
    if(ad[i].checked== true)
       return true;
     document.getElementById('type').innerHTML="DGREE: "+ad[i].value;


  }
  
  document.getElementById('type').innerHTML="**please select anyon";
  return false;

  }



</script>