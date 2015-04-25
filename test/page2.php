<html>

	<body>
		<?php
		
			session_start();
			$_SESSION['name']=$_POST['name'];
			echo "you are logged in as:".$_POST['name'];
		
		?>
	</body>


</html>
