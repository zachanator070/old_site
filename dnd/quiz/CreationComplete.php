

<?php
	
	include '../database/DatabaseAccess.php';
	include_once '../model/Skill.php';
	include 'QuizTemplate.php';
	include_once '../model/Character.php';
	include_once '../model/SkillDefinitions.php';
	
	class CreationComplete{
		
		private $character;
		private $creationResult;
		
		function __construct(){
			
				session_start();
			
				$this->character=unserialize($_SESSION['character']);
				
				$this->buildCharacterSkills();
				
				$hd = SkillDefinitions::$classHd[$this->character->class];
				
				$this->character->defense['hd']="d".$hd;
				$this->character->defense['hp']=$hd;
				$this->character->defense['hp_cur']=$hd;
				
				$saves = SkillDefinitions::$classSaves[$this->character->class][1];
				
				$this->character->saves['fort_base']=$saves[0];
				$this->character->saves['reflex_base']=$saves[1];
				$this->character->saves['will_base']=$saves[2];
				
				$db = new DatabaseAccess();
				
				$this->creationResult = $db->createCharacter($this->character);
		}
		
		function buildCharacterSkills(){
			
			$skillsPosted = array();
			
			error_log("number of checkboxes checked:".count($_POST['skillbox']));
			
			for($x=0;$x<count($_POST['skill']);$x++){
				
				$skillName = $_POST['skill'][$x];
				$skillRanks = $_POST['rank'][$x];
				$skillMiscRanks = 0;
				$isClassSkill = 0;
				
				
				foreach($_POST['skillbox'] as $boxKey=>$boxName){
			
					
					if($skillName == $boxName){
						$isClassSkill =1;
					}
					
				
				}
				
				$skillAbility = SkillDefinitions::getSkillAbility($skillName);
				
				$skillsPosted[$x] = new Skill($isClassSkill,$skillName,$skillRanks,$skillMiscRanks,$skillAbility);
				
			}
			
			
			foreach($_POST['skillbox'] as $boxKey=>$boxName){
			
				foreach($this->character->skills as $skillKey=>$skill){
					if($skill->name == $boxName){
						$this->character->skills[$skillKey]->class =1;
					}
				}
			
			}
			
			$this->character->skills = $skillsPosted;
		}
		
		function getContent(){
			
			$content = <<<"CONTENT"
			
			{$this->creationResult}
			
			<p>
				Now that your character is created, there are a couple of things to do before you start playing:
				<ul>
					<li>Open the players guide under docs->player's guide->text</li>
					<li>read more about your character race and class</li>
					<li>Add starting feat and any bonus class feats</li>
					<li>Fill out player name, age, gender, and background information</li>
					<li>Upload a sweet picture of your character to show how freaking awesome you are</li>
					<li>Do not forget to save your changes on your character sheet!</li>
				</ul>
				
				<br/>
				NOTE: This list above can be found under the character creation page <a href="start.php">here</a> if you loose it
				
			</p>
			
			<form name='autoload' method='post' action='../charsheet/Charsheet.php'>
				<input type='hidden' name='name' value='{$this->character->name}'>
				<input type='hidden' name='password' value='{$this->character->password}'>
				<input type='submit' value="Proceed to Character sheet">
			</form>
CONTENT;
	
			return $content;
		}

	}
	
	$template = new QuizTemplate();
	
	$complete = new CreationComplete();
	
	$template->displayHtml($complete->getContent(),"","");
?>

