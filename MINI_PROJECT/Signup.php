<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style type="text/css">
	span.show { 
		color: red;
	}
.clearBoth { clear:both; }

h3.look{
	color: indigo;
}

h1.look{
	color:hotpink;
}
.fieldset-auto-width {
         display: inline-block;
    }

/*.rightContent {
  margin: 0px;
  display: inline-block; 
  width: 350px;
  float: left !important;
}

.midContent {
  margin: 0px;
  display: inline-block;
  width: 350px;
  float: ;
}


.leftContent {
  margin: 0px;
  display: inline-block;
  float:left;
}*/
   
    </style>
    <script type="text/javascript">
    	function data_copy(){
    		if(document.form1.copy[0].checked){
    			console.log(document.form1.copy[0].checked);
    			document.form1.HsgLoc1.value=document.form1.HsgLoc.value;
    			document.form1.StrtAdd1.value=document.form1.StrtAdd.value;
    			document.form1.City1.value=document.form1.City.value;
    			document.form1.State1.value=document.form1.State.value;
    			document.form1.Zip1.value=document.form1.Zip.value;
    		}
    		else{
    			document.form1.HsgLoc1.value="";
    			document.form1.StrtAdd1.value="";
    			document.form1.City1.value="";
    			document.form1.State1.value="";
    			document.form1.Zip1.value="";
    		}
    	}
    </script>
	<script>
function pass_validation()
{
var firstpassword=document.form1.Pwd.value;  
var secondpassword=document.form1.Rpwd.value;  

if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("Re-entered password should be same as entered password!");  
return false;  
}  
} 
</script>
</head>
<body bgcolor="#FDF8FF">

 





<form name="form1" action="index.php" method="post" onsubmit="return pass_validation()">

<h1 class="look"> SIGN UP </h1><br>
<div width=100% >
<div class="rightContent"><fieldset class="fieldset-auto-width"><legend><h3 class="look"> Basic Information </h3></legend>
Resident ID: <input type="number" name="ResID" placeholder="Your Resident ID" required pattern="[A-Za-z]"/><span class="show" >*</span><br><br>
First Name: <input type="text" name="Fname" placeholder="Enter Your First Name" required><span class="show" >*</span><br><br>
Last Name: <input type="text" name="Lname" placeholder="Enter Your Last Name" required><span class="show" >*</span><br><br>
Phone Number: <input type="number" name="Phno" placeholder="Your Phone Number" required><span class="show" >*</span><br><br>
Email/Username: <input type="email" name="Email" placeholder="YourEmail@something.com" required><span class="show" >*</span><br><br>
Password: <input type="password" name="Pwd" placeholder="Create Password" required><span class="show" >*</span><br><br>
Re-enter Password: <input type="password" name="Rpwd" placeholder="Confirm Password" required><span class="show" >*</span><br><br></fieldset>
</div>


<div class="midContent"><fieldset class="fieldset-auto-width"><legend><h3 class="look"> Primary Residential Information </h3></legend>
Housing Location: <input type="text" name="HsgLoc" placeholder="Your building name, no., etc." required ><span class="show" >*</span><br><br>
Street Address: <input type="text" name="StrtAdd" placeholder="Enter Your Street Adress" required><span class="show" >*</span><br><br>
City: <input type="text" name="City" placeholder="Enter Your City" required ><span class="show" >*</span><br><br>
State: <input type="text" name="State" placeholder="Enter Your State" required ><span class="show" >*</span><br><br>
ZIP code: <input type="number" name="Zip" placeholder="Enter Your ZIP/Pincode" required><span class="show" >*</span></fieldset><br><br>
Secondary Adress: <input type="radio" name="copy" value="1" onclick="data_copy()">Same as above
				<input type="radio" name="copy" value="0" onclick="data_copy()"> Different
</div>

<div class="leftContent"><fieldset class="fieldset-auto-width"><legend><h3 class="look"> Secondary Residential Information</h3></legend>
Housing Location:  <input type="text" name="HsgLoc1" placeholder="Your building name, no., etc." required ><span class="show" >*</span><br><br>
Street Address: <input type="text" name="StrtAdd1" placeholder="Enter Your Street Adress" required ><span class="show" >*</span><br><br>
City: <input type="text" name="City1" placeholder="Enter Your City" ><span class="show" required >*</span><br><br>
State: <input type="text" name="State1" placeholder="Enter Your State" ><span class="show" required >*</span><br><br>
ZIP code: <input type="number" name="Zip1" placeholder="Enter Your ZIP/Pincode" required ><span class="show" >*</span></fieldset><br><br>
</div>


<span class="show" >*</span>Required Fields</div> <br class="clearBoth">
<input type="submit" name="signup" value="Sign Up">
<input type="submit" name="signup" value="Clear">
</div>
</form>

<?php
// error_reporting(E_ALL);
 //ini_set('display_errors', 1);
// if (isset($_POST['action'])) { echo '<br />The ' . $_POST['submit'] . ' submit button was pressed<br />'; }

// if (!mysqli_query($sql,$conn))

//   {

//   die('Error: ' . mysqli_error());

//   }

// echo "1 record added";

 

// mysql_close($con);

?>



</body>
</html>