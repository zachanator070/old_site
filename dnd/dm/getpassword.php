<!DOCTYPE HTML>
<meta charset="UTF-8">


<html>

<?php


	
		//error_reporting(E_ALL);
		ini_set("display_errors", 1);
		//include("../php_errors.log"); 
		
	
	
	$con=mysqli_connect("thezachcave.com","dnd","datadog","dnd");
	
	if (!$con)
	  {
		die("Failed to connect to Character Database: " . mysqli_error($con)."<br/>");
	  }

	$name = $_POST['name'];
	
	$result = mysqli_query($con,"SELECT password FROM info WHERE name='".$name."'");
	
	echo "<html><body>";
	echo "<h1>Password Results</h1>";
	echo "<p>";
	echo "Name: ".$name;
	echo "<br/> Password: ".mysqli_fetch_array($result)['password'];
	echo "<br/><a href='index.php'>Back to DM page</a>";
	echo "</p>";
	echo "</body></html>";
	
?>

</html>
