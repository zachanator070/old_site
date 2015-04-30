
<?php

class QuizTemplate{
	
	function displayHtml($content,$head,$foot){
		
		//start of the template html code
		$template = <<<"TEMPLATE"
		
	<html>
		<head>
			<link rel = "stylesheet" type = "text/css" href = "../dndstyle.css">
			<link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
			<meta charset="UTF-8">
			$head
		</head>
		
		<body>
		
		<div id='frame'>
		
			<div id='links'>
				<div id="back" class ="link"><p class="link"><a class="link" href='../../lols.php'>Back to Lols</a></p></div>
				<div id='link1' class="link"><p class="link"><a class="link" href='../index.php'>DnD Home</a></p></div>
				<div id='link2' class="link"><p class="link"><a class="link" href='../docs/index.php'>Docs</a></p></div>
				<div id='link3' class="link"><p class="link"><a class="link" href='../charsheet/Charsheet.php'>Character Sheet</a></p></div>
			</div>
			
			<div id='content'>
				$content
			</div>
		</div>

		<div id="footer">
			$foot
		</div>

		</body>
	</html>
	
TEMPLATE;
		//end of the template html code
		
		echo $template;
		
	}
}

?>
