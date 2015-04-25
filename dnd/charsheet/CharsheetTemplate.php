<?php

class CharsheetTemplate{

	function printHtml($content,$head,$foot,$other){
		
		$html = <<<"HTML"
			<html>
				<head>
					<link rel = "stylesheet" type = "text/css" href = "../dndstyle.css">
					<meta charset="UTF-8">
					$head
				</head>
				<body>
					<div id='frame'>
					
						<div id='links'>
							<div id="back" class ="link"><p class="link"><a href='../../lols.php' class="link">Back to Lols</a></p></div>
							<div id='link1' class="link"><p class="link"><a href='../index.php' class="link">DnD Home</a></p></div>
							<div id='link2' class="link"><p class="link"><a href='../docs/index.php' class="link">Docs</a></p></div>
							<div id='link3' class="link"><p class="link"><a href='Charsheet.php' class="link">Character Sheet</a></p></div>
						</div>
						
						<div id='content'>
							$content
						</div>
						
						$other
					
						<div id="footer">
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
