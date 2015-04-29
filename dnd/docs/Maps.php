<?php
	
	include 'DocTemplate.php';
	
	class Maps{
	
		function getContent(){
			
			$content = <<<"CONTENT"
	
			<h2>City of Dreams</h2><br/>
			<img src='maps/City of Dreams Final.png' height='800px' width='800px'/>
		
CONTENT;
			return $content;
		}
	
	
	}
	
	$template = new DocTemplate();
	$maps = new Maps();
	
	$template->printHtml($maps->getContent(),'','','');
	
?>
