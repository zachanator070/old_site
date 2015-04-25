<?php

	class DocTemplate{
	
		public function printHtml($content,$header,$footer,$other){
			
			$html = <<<"HTML"
			
				<html>
					<head>
						<link rel = "stylesheet" type = "text/css" href = "../dndstyle.css">
					
						$header
						
					</head>
					
					<body>
					
					<div id="frame">
						
						<div id='links'>
							<div id="back" class ="link"><p class="link"><a class="link" href='../../lols.php'>Back to Lols</a></p></div>
							<div id='link1' class="link"><p class="link"><a class="link" href='../index.php'>DnD Home</a></p></div>
							<div id='link2' class="link"><p class="link"><a class="link" href='index.php'>Docs</a></p></div>
							<div id='link3' class="link"><p class="link"><a class="link" href='../charsheet/Charsheet.php'>Character Sheet</a></p></div>
						</div>
						
						$other
						
						<div id="content">
						
							$content
						
						</div>
					
					</div>
					<div id="footer">
						$footer
					
					</div>
					
					</body>
				</html>

HTML;

			echo $html;
		}
	}
?>
