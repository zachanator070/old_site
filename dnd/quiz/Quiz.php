
			
<?php

	include "QuizTemplate.php";
	
	class Quiz{
		
		function getHeader(){
			
			$header = <<<"HEADER"
				<script language="javascript" src="charquiz.js">
                </script>
HEADER;
			
			return $header;
			
		}
		
		function getContent(){
			
			$content = <<<"CONTENT"
				<form name='charquiz' id="charquiz" action='Results.php' method="post">
				
					<h1>Character Class Aptitude Test</h1>
					<p>Welcome to the Character Class Aptitude Test! Here you will find out what race, class, and abilities your
					 character will have. Please answer the questions as though you are the character that you want as. Please silence
					 you cell phones while taking the test and those found cheating will receive an automatic failing grade and will play
					 as a lvl 0 janitor who is going through a midlife crisis becuase his wife of 20 years was recently seen with another 
					 man and is filing for divorce with you because of your "dependency" issues.</p>
					 
					<h2>#1</h2>
					<p>What is your name? (your character's name)</p>
					<br/><input type="text" name = "one" value="name" />
					
					<h2>#2</h2>
					<p>LALALALALALA You are walking down the street one day and you happen across a giant rat! What action do you take?</p>
					<br/><input type="radio" name="two" value="Survivalist"/>Kill it with your bare hands, skin it, and eat it for dinner
					<br/><input type="radio" name="two" value="Marine"/>Call in an air strike! THAT THING IS HUGE!
					<br/><input type="radio" name="two" value="Savage"/>Jump on it and try to stay on it for longer than 8 seconds
					<br/><input type="radio" name="two" value="Thief"/>Sneak behind the beast and stab it with your dagger before it can go far
					<br/><input type="radio" name="two" value="Tech"/>Whip out your remote detonator waiting for the right moment to blow it sky high
					<br/><input type="radio" name="two" value="Doc"/>Follow it back to its nest, gain its trust by nurturing for its young, and earn a life long companion
					
					<h2>#3</h2>
					<p>When you look in the mirror what color do you see?</p>
					<br/><input type="radio" name="three" value="Mutant">Green
					<br/><input type="radio" name="three" value="Android">Blue
					<br/><input type="radio" name="three" value="Average Joe">White
					<br/><input type="radio" name="three" value="Ghoul">Black
					
					<h2>#4</h2>
					<p>Which attribute is your greatest strength?</p>
					
					<br/><input type="radio" name="four" value="Savage">Strength
					<br/><input type="radio" name="four" value="Doc">Wisdom
					<br/><input type="radio" name="four" value="Marine">Constitution
					<br/><input type="radio" name="four" value="Tech">Intelligence
					<br/><input type="radio" name="four" value="Survivalist">Charisma
					<br/><input type="radio" name="four" value="Thief">Dexterity
					
					<h2>#5</h2>
					<p>Which attribute is your greatest weakness?</p>
					
					<br/><input type="radio" name="five" value="Tech">Strength
					<br/><input type="radio" name="five" value="Marine">Wisdom
					<br/><input type="radio" name="five" value="Doc">Constitution
					<br/><input type="radio" name="five" value="Savage">Intelligence
					<br/><input type="radio" name="five" value="Thief">Charisma
					<br/><input type="radio" name="five" value="Survivalist">Dexterity
					
					<h2>#6</h2>
					<p>You find your self in a zombie apocalypse, what is your zombie killing weapon of choice?</p>
					
					<br/><input type="radio" name="six" value="Marine">Rifle
					<br/><input type="radio" name="six" value="Thief">Silenced Pistol
					<br/><input type="radio" name="six" value="Savage">Your bare fists
					<br/><input type="radio" name="six" value="Tech">Laser Pistol
					<br/><input type="radio" name="six" value="Doc">Chainsaw
					<br/><input type="radio" name="six" value="Survivalist">Sniper
					
					<h2>#7</h2>
					<p>How would you describe your political views?</p>
					
					<br/><input type="radio" name="seven" value="Android">money = power
					<br/><input type="radio" name="seven" value="Ghoul">couldn't care less
					<br/><input type="radio" name="seven" value="Mutant">more for the little guy
					<br/><input type="radio" name="seven" value="Average Joe">eh politics?
					
					<h2>#8</h2>
					<p>You have a nuclear bomb, what do you do with it?</p>
					
					<br/><input type="radio" name="eight" value="Ghoul">Destroy it, nukes should never be used
					<br/><input type="radio" name="eight" value="Android">take it apart and make it bigger and better
					<br/><input type="radio" name="eight" value="Average Joe">sell it for $$$
					<br/><input type="radio" name="eight" value="Mutant">threaten my enemies with it
					
					<br/>
				</form>
				<button onclick="validate()">Submit</button>
		
CONTENT;

			return $content;
		}
	}
	
	$quiz = new Quiz();
	
	$template = new QuizTemplate();
	$template->displayHtml($quiz->getContent(),$quiz->getHeader(),'');
	
?>
	
