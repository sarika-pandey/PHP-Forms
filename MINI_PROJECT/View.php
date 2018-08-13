<!DOCTYPE html>
<html>
<head>
	<title>Customer Details</title>
	<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
    h1.heading{
    	color: hotpink;
    }
	h4.heading{
    	color: indigo;
    }
  
</style>
</head>
<body bgcolor="#FDF8FF">
<form action="" method="post">
<h1 class="heading">Hello, Valued Customer!</h1><br>
<fieldset class="fieldset-auto-width">
<legend>Check Your Details</legend>
Please enter your username/email-id: <input type="text" name="username" placeholder="abc@something.com"><br><br>
<input type ="submit" name="check" value="View Details">
</fieldset>
</form>
<?php
//echo "hi";exit();
session_start();
if (isset($_POST["check"])) {
	//echo "hi";exit();
	if($_POST['username']== $_SESSION["user"])
	{
$email = $_POST['username'];
  $conn = new mysqli("localhost", "root", "root", "MiniProject");

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		//else{
			//echo "Success";
		//}
	  
	    $query="SELECT * FROM CustomerDetails WHERE Email='".$email."'";  
		$result=$conn->query($query);
		while ($row1 = mysqli_fetch_array($result)) {
			
		

?>
<div class="form">
<h2><u>Account Details</u></h2>
<!-- Displaying Data Read From Database -->
<span><h4 class="heading">Personal Information</h4>
<span>Residential ID:</span> <?php echo $row1['ResID']; ?><br>
<span>First Name:</span> <?php echo $row1['Fname']; ?><br>
<span>Last Name:</span> <?php echo $row1['Lname']; ?><br>
<span>Phone Number:</span> <?php echo $row1['Phno']; ?><br>
<span>Email ID:</span> <?php echo $row1['Email']; ?><br>
<span>Password:</span> <?php echo $row1['Pwd']; ?><br>
<span> <h4 class="heading"> Primary Residential Address </h4>
<span>Housing Location:</span> <?php echo $row1['HsgLoc']; ?><br>
<span>Street Address:</span> <?php echo $row1['StrtAdd']; ?><br>
<span>City:</span> <?php echo $row1['City']; ?><br>
<span>State:</span> <?php echo $row1['State']; ?><br>
<span>ZIP Code:</span> <?php echo $row1['Zip']; ?><br>
<span><h4 class="heading"> Secondary Residential Address</h4>
<span>Housing Location:</span> <?php echo $row1['HsgLoc1']; ?><br>
<span>Street Address:</span> <?php echo $row1['StrtAdd1']; ?><br>
<span>City:</span> <?php echo $row1['City1']; ?><br>
<span>State:</span> <?php echo $row1['State1']; ?><br>
<span>ZIP code:</span> <?php echo $row1['Zip1']; ?><br>
</div>
<?php
}
}else{echo "Please enter your username correctly.";}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
//mysql_close($connection); // Closing Connection with Server
?>

</body>
</html>