<?php
	
	include 'DocTemplate.php';
	
	class Maps{
	
		function getContent(){
			
			$content = <<<"CONTENT"
	
			<h2>City of Dreams</h2><br/>
			<img src='maps/City\ of\ Dreams\ Final.png' height='2632px' width='2932px'/>
		
CONTENT;
			return $content;
		}
	
	
	}
	
	$template = new DocTemplate();
	$maps = new Maps();
	
	$template->printHtml($maps->getContent(),'','');
	
?>
