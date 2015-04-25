<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "blogstyle.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script src="../da_script.js" language="javascript" type="text/javascript"></script>
		
	</head>
	
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
				
				
		<div id="frame">	
			<div id = "scroll">
				<h1>Do I look Pretty?</h1>	
			</div>
				
			<div id ="anchors">
					
			</div>
				
			<div id="clock">
			
			</div>
				
			<div id = "content">
				 <div class="entry">
					 
				 </div>
				
			</div>
			
			<div id = "nav">
				<a href="../index.php" class="navlink">
				<div id="navmid">
					Home
				</div>
				</a>
				
				<a href="index.php" class="navlink">
				<div id="navmid">
					Blog
				</div>
				</a>
				
				<a href="../quotes.php" class="navlink">
				<div id="navmid">
					Quotes
				</div>
				</a>
				
				<a href="../lols.php" class="navlink">
				<div id="navmid">
					Lols
				</div>
				</a>
			</div>
			
			<div id="entries">
					<h3 class="entryTitle">Entries</h3>
					<ul>
						<?php
						include "entries.php";
						
						?>
					</ul>
			</div>
			
		</div>
	</body>
</html>
