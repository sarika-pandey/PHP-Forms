<html>
<head><title>Sign In</title>
<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
    .heading{
    	color: teal;
    }
  
</style>
</head>
<body bgcolor="#fff0e3">

<center>
	<h1 class="heading"> Hello User! Sign In to your Account.</h1>
</center>
<br><br>

<?php
// error_reporting(E_ALL);
//  ini_set('display_errors', 1);
if(isset($_POST["signin"])){ 
  
	if(!empty($_POST['username']) && !empty($_POST['pwd'])) {  
	    $user=$_POST['username'];  
	    $pass=$_POST['pwd']; 

	  
	    $conn = new mysqli("localhost", "root", "root", "MiniProject");

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
	  
	    $query="SELECT * FROM CustomerDetails WHERE Email='".$user."' AND Pwd='".$pass."'";  
		$result=$conn->query($query); 

	    $rowcount = mysqli_num_rows($result);
	    if($rowcount > 0){
	    	$row = $result->fetch_array(MYSQLI_ASSOC);
	    	$isAdmin = $row['IsAdmin'];
	    	if($isAdmin){
	    		//ADmin User
	    		header("Location: List.php");
	    	}else{
	    	//Normal User	
	    	 header("Location: View.php");
	    	}
	    	// echo '<pre>';print_r($row);exit;

	    }else{
	    	echo "Invalid username or password. Please Try again. ";
	    }
	    
		$conn->close();
	 }else{
	 	echo "Fields cannot be empty";
	 }
}
    
?>
<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
$action1=$_POST["signup"];
if($action1 == 'Sign Up')
{
//echo '<pre>';print_r($action1);exit;
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db="MiniProject";
	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO CustomerDetails (ResID,Fname, Lname, Phno, Email, Pwd, HsgLoc, StrtAdd, City, State, Zip, HsgLoc1, StrtAdd1, City1, State1, Zip1)
	        VALUES ('".$_POST["ResID"]."','".$_POST["Fname"]."','".$_POST["Lname"]."','".$_POST["Phno"]."','".$_POST["Email"]."','".$_POST["Pwd"]."','".$_POST["HsgLoc"]."','".$_POST["StrtAdd"]."','".$_POST["City"]."','".$_POST["State"]."','".$_POST["Zip"]."','".$_POST["HsgLoc1"]."','".$_POST["StrtAdd1"]."','".$_POST["City1"]."','".$_POST["State1"]."','".$_POST["Zip1"]."')";

	if ($conn->query($sql) === TRUE) {
	    echo "You can now login to your account!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}elseif($action1=="Clear"){
	$_POST["ResID"]="";
	$_POST["Fname"]="";
	$_POST["Lname"]="";
	$_POST["Phno"]="";
	$_POST["Email"]="";
	$_POST["Pwd"]="";
	$_POST["HsgLoc"]="";
	$_POST["StrtAdd"]="";
	$_POST["City"]="";
	$_POST["State"]="";
	$_POST["Zip"]="";
	$_POST["HsgLoc1"]="";
	$_POST["StrtAdd1"]="";
	$_POST["City1"]="";
	$_POST["State1"]="";
	$_POST["Zip1"]="";

}
?>
<form action="#" method="post" >
	<center>
		<fieldset class="fieldset-auto-width">
			<legend> SIGN IN</legend>
			Username: <input type="text" name="username" placeholder="Your Username" ><span style="color:red" >*</span><br><br>
			Password: <input type="password" name="pwd" placeholder="Your Password"><span style="color:red" >*</span><br><br>
			<input  type="submit" name="signin" value="Sign In" >
			
		</fieldset><br>
	<span style="color:red" >*</span>Required Fields
	</center>
</form>
<br><br>

<center>
	<h4 class="heading">Don't have an account yet?</h4><br>
	<div><a href="Signup.php"><button>Sign up</button></div>
</center>

</body>
</html>
