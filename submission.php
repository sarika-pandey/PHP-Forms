<!DOCTYPE html>
<html>
<head>
	<title>Submission</title>
</head>
<body>
<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	if($fname=="" || $lname==""){
		echo "All fields not entered<br>";
	}
	else{
		echo "Hello <b>$fname $lname</b> <br>";
	}
	if(isset($_POST['agree'])){
		echo "You have agreed<br>";
	}
	else{
		echo "You have not agreed<br>";
	}
	if ($_POST['gender']=="male") {
		echo "Gender selected is Male<br>";
	}
	else{
		echo "Gender selected is Female";
	}
?>
</body>
</html>