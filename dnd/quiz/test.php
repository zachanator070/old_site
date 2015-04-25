<?php
	
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	
	session_start();
	
	$_SESSION['example'] = "example"
?>

<html>

	<body>
		<form method='post' action='test2.php'>
			
			<button type='submit'>Submit</button>
		</form>
	
	</body>

</html>
