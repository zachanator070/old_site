<?php
	class dndTemplate{
		
		
		function printHtml($content,$head,$foot){
			
			$html = <<<"HTML"
					
				<html>
					<head>
						<link rel = "stylesheet" type = "text/css" href = "dndstyle.css">
						<link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
						$head
					</head>
					
					<body>
					
					<div id='frame'>
					
						
						<div id='links'>
							<div id="back" class ="link"><p class="link"><a class="link" href='../lols.php'>Back to Lols</a></p></div>
							<div id='link1' class="link"><p class="link"><a class="link" href='index.php'>DnD Home</a></p></div>
							<div id='link2' class="link"><p class="link"><a class="link" href='docs/index.php'>Docs</a></p></div>
							<div id='link3' class="link"><p class="link"><a class="link" href='charsheet/Charsheet.php'>Character<br/>Sheet</a></p></div>
						</div>
						
						<div id='content'>
						
							$content
						
						</div>
						
						<div id='footer'>
							$foot
						</div>
					</div>

					</body>
				</html>
		
HTML;
		
		echo $html;
		
		}
		
	}

?>
