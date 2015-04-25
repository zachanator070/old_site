<html>
	
	<?php
		session_start();
	?>
	
	<body>
		
		<?php
		
		if(!isset($_SESSION['name'])){
			
			echo "<form action='page2.php' method='post'>";
			echo "name:<input type='text' name='name'/><br/>";
			echo "<input type='submit'/>";
			echo "</form>";
		}
		
		else {
			echo "you are already logged in!";
		}
			
		?>
	
	
	</body>



</html>
