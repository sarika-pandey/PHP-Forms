<!DOCTYPE html>
<html>
<head>
	<title>Customer List</title>
	<style>
	h1.heading{
		color: tomato;
	}
	th.tabhead{
		background-color: lightblue;
	}
	</style>
</head>
<body>
<h1 class="heading">Hello, Admin!</h1><br><br>
Below is a list of all the customer details:<br><br>


<?php
// error_reporting(E_ALL);
//  ini_set('display_errors', 1);
 $conn = new mysqli("localhost", "root", "root", "MiniProject");

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$query="SELECT * FROM CustomerDetails ";  
		$result=$conn->query($query);
		echo "<table border='1' cellpadding='0.5px'>";
		echo "<th class='tabhead'> ResID </th>";
		echo "<th class='tabhead'> F-name </th>";
		echo "<th class='tabhead'> L-name </th>";
		echo "<th class='tabhead'> Phone </th>";
		echo "<th class='tabhead'> Username </th>";
		echo "<th class='tabhead'> Password </th>";
		echo "<th class='tabhead'> Housing Loc </th>";
		echo "<th class='tabhead'> Street </th>";
		echo "<th class='tabhead'> City </th>";
		echo "<th class='tabhead'> State </th>";
		echo "<th class='tabhead'> ZIP </th>";
		echo "<th class='tabhead'> Sec Housing </th>";
		echo "<th class='tabhead'> Sec Street </th>";
		echo "<th class='tabhead'> Sec City </th>";
		echo "<th class='tabhead'> Sec State </th>";
		echo "<th class='tabhead'> Sec Zip </th>";
		echo "<th class='tabhead'> isAdmin </th>";
		while($r=$result->fetch_array(MYSQLI_ASSOC)) {
		extract($r);
		// echo '<pre>';print_r($r);exit;
		echo"<tr>";
		foreach($r as $key => $value)
		{
			
  			// echo $key; 
  			echo "<td width='70px' height='50px'>" .$value. "</td>";

		}
		echo "</tr>";
		
		}
		echo "</table>";

		


?>
		


</body>
</html>