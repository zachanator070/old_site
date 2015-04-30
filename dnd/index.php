<?php 

	include 'dndTemplate.php';
	
	class dndIndex{
		
		function getContent(){
		
			$content = <<<"CONTENT"
				
				<h1>Welcome!</h1>
				<p>
				To those of you here for the first time take a moment to check
				 out the documents page which explains more about what Dungeons 
				 and Dragons really is. There you will find the players manual for
				 my homebrew version of D&D called The City of Dreams. 
				</p>
				
				<h1>Character Creation</h1>
				<p>
				I have made a database that will be able to store everything on 
				a character sheet online to make things more paperless. It even 
				includes a mobile version so that you can play D&D simply using
				 a smart phone. Click on the Character Sheet tab up at the top to
				 see any previously created characters.
				</p>
				
				<p>
				<button onclick="window.location.href='quiz/index.php'">Create a Character</button>
				</p>
CONTENT;

			return $content;
		
		}
	}
	
	$dndIndex = new dndIndex();
	$dndTemplate = new dndTemplate();
	
	$dndTemplate->printHtml($dndIndex->getContent(),'','');

?>
