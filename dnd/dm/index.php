<!DOCTYPE HTML>
<meta charset="UTF-8">


<html>
	<head>
		<script language='javascript' src='dm.js'></script>
		<link rel = "stylesheet" type = "text/css" href = "../dndstyle.css">
	</head>
	
	
	<body>
		
		<?php
			include 'DM.php';
		
			$dm = new DM();
			
			echo $dm->printDelete();
			echo $dm->printPassword();
			echo $dm->printPictures();
		
		?>
		
	</body>
</html>
