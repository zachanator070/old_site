<?php

	include 'QuizTemplate.php';
	
	class Index{

		function getContent(){
			
			$content = <<<"CONTENT"
							
				<h1>Character Creation</h1>
					
					<h2>Character Class Aptitude Test</h2>
					<p>
						
						Is this your first time playing Dungeons and Dragons? Then the Character Class Aptitude Test is right for you! It will
						walk you through the character creation process. <br/><br/>
						<button onclick="window.location.href='Quiz.php'">Take the quiz</button>
					</p>
					
					<h2>Shuddup I Know What I'm Doing</h2>
					<p>
						If you are a pro and know what you are doing or just don't want to take the tutorial,
						then skip the quiz and enter in your character's basic information.<br/><br/>
						<button onclick="window.location.href='Results.php'">Create a Character</button>
					</p>
					
					<h2>What to do after you create your character</h2>
					<p>
						After your character is created, there are a couple of things to do before you start playing:
						<ul>
							<li>Open the players guide under docs->player's guide->text</li>
							<li>read more about your character race and class</li>
							<li>Add starting feat and any bonus class feats</li>
							<li>Fill out player name, age, gender, and background information</li>
							<li>Upload a sweet picture of your character to show how freaking awesome you are</li>
							<li>Don't forget to save your changes on your character sheet</li>
						</ul>
					</p>
CONTENT;
			
			return $content;
		}
	}
	
	$index = new Index();
	
	$template = new QuizTemplate();
	$template->displayHtml($index->getContent(),'','');

?>
