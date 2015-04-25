
<?php

	include_once '../model/Character.php';
	include_once '../charsheet/HtmlPrinter.php';
	include_once 'QuizTemplate.php';
	include_once '../model/SkillDefinitions.php';
	include_once '../model/Skill.php';


	class PickSkills{
		
		public $character;
		
		private $starting_skills;
		
		function find_mod($abil){
				$abil_int = intval($abil);
				$mod = -5;
				$val =1;
				while($abil_int>$val){
					$val =$val +2;
					$mod++;
					
				}
				
			return $mod;
		}
		
		function buildCharacter(){
			
			$this->character->name =  $_POST['name'];
			$this->character->class = $_POST['class'];
			$this->character->race = $_POST['race'];
			$this->character->level = 1;
			$this->character->password = $_POST['password'];
			
			$attributes = array();
			
			$attributes['strength'] = $_POST['strength']+$_POST['race_str'];
			$attributes['dexterity'] = $_POST['dexterity']+$_POST['race_dex'];
			$attributes['constitution'] = $_POST['constitution']+$_POST['race_con'];
			$attributes['intelligence'] = $_POST['intelligence']+$_POST['race_int'];
			$attributes['wisdom'] = $_POST['wisdom']+$_POST['race_wis'];
			$attributes['charisma'] = $_POST['charisma']+$_POST['race_cha'];
			
			$this->character->attributes=$attributes;
			
			$emptySkills = array();
			
			foreach(SkillDefinitions::$skillAbilities as $name=>$abil){
				
				$skillName = $name;
				$skillRanks = 0;
				$skillMiscRanks = 0;
				$isClassSkill = SkillDefinitions::isClassSkill($this->character->class,$skillName);
				$skillAbility = $abil;
				
				array_push($emptySkills,new Skill($isClassSkill,$skillName,$skillRanks,$skillMiscRanks,$skillAbility));
				
			}
			
			$this->character->skills = $emptySkills;
			
			session_start();
			
			$_SESSION['character']=serialize($this->character);
			
		}
		
		function __construct(){
			$this->character = new Character();
			
			$this->buildCharacter();
			
			$this->starting_skills = array(
				"Marine"=>(4+(find_mod($this->character->attributes['intelligence'])))*4,
				"Savage"=>(2+(find_mod($this->character->attributes['intelligence'])))*4,
				"Thief"=>(8+(find_mod($this->character->attributes['intelligence'])))*4,
				"Tech"=>(4+(find_mod($this->character->attributes['intelligence'])))*4,
				"Survivalist"=>(4+(find_mod($this->character->attributes['intelligence'])))*4,
				"Doc"=>(6+(find_mod($this->character->attributes['intelligence'])))*4,
			);
		}
		
		
		
		function calcPointsAvail(){
			
			$skillPoints =0;
			
			if($this->character->race=="Average Joe"){
				$skillPoints+=4;
			}
			
			$skillPoints+= $this->starting_skills[$this->character->class];
			
			return $skillPoints;
			
		}
	
		function getHeader(){
			
			$header = "<script language='javascript' src='pickskills.js'></script>";
			
			return $header;
			
		}
		
		function getFooter(){
				
				$footer = <<<"FOOTER"
					<script>
						
					</script>
FOOTER;
				
				return $footer;
				
		}
		
		function generateSkillTable(){
			
			$html="\n<table>\n";
			$html.= "<tr><td>Class Skill</td><td class='medcell'>Skill</td><td>Modifier</td><td>Ranks</td><td>Total</td></tr>\n";
			
			//for each skill
			foreach($this->character->skills as $key=>$value){
				
				$html.="<tr>";
				
					//displays a checked or unchecked box
				if($this->character->skills[$key]->class==1){
					
					$html.= "<td><input type='checkbox'  id='".$value->name."box' value='".$value->name."' name ='skillbox[]' checked/></td>";
				}
				
				else{
					
					$html.= "<td><input type='checkbox'  id='".$value->name."box' value='".$value->name."' name ='skillbox[]'/></td>";
				}
				
				
				$skillAbilityMod;
				switch($value->ability){
					
					case "STR":$skillAbilityMod=find_mod($this->character->attributes['strength']);break;
					case "DEX":$skillAbilityMod=find_mod($this->character->attributes['dexterity']);break;
					case "CON":$skillAbilityMod=find_mod($this->character->attributes['constitution']);break;
					case "INT":$skillAbilityMod=find_mod($this->character->attributes['intelligence']);break;
					case "WIS":$skillAbilityMod=find_mod($this->character->attributes['wisdom']);break;
					case "CHA":$skillAbilityMod=find_mod($this->character->attributes['charisma']);break;
					
				}
				
				//display skill name and ranks
				$html.= "<td><input type='hidden' name ='skill[]' value='".$value->name."'>".$value->name."</td>";
				$html.= "<td><input type='hidden' id='".$value->name."bonus' value='".$skillAbilityMod."'>".$value->ability." (".$skillAbilityMod.")</td>";
				$html.= "<td><input type='text' size='3' id='".$value->name."rank' onkeyup=\"updaterank('".$value->name."')\" name ='rank[]' value='".$value->ranks."'/></td>";
								
				//display the total skill value
				$skilltotal = $skillAbilityMod + $value->ranks + $value->misc;
				$html.= "<td id='".$value->name."total'>".$skilltotal."</td></tr>\n";
				
			}
			
			$html.= "</table>";
			
			return $html;
			
		}
	
		function getContent(){
			
			$skillPoints = $this->calcPointsAvail();
			
			
			$skillsSection = $this->generateSkillTable();
			
			$content = <<<"CONTENT"
			
				<h1>Skills</h1>
					<p>
					{$this->character->name}, you have selected to be a {$this->character->race} {$this->character->class}!<br/><br/>
					Max Class Skills: 4 (your level + 3)<br/>
					Max Non Class Skills: 2 (half of the max of class skills)<br/><br/>
					Choose your skills wisely<br/>
					<br/>
					
					Skill Points remaining: 
					<span id="remaining">
						$skillPoints
					</span>
					<br/>
					</p>
					<input type="hidden" name="startingskills" id="startingskills" value = "$skillPoints">
					
					<button onclick="clearranks()" class="button" >Clear Ranks</button>
					
					<form action="CreationComplete.php" method = "post" id="createform">
						
						$skillsSection
						
					</form>
		
					<button onclick="checkcreate()">Create Character</button>
							
			
CONTENT;
	
			return $content;
		}
	}
	
	$template = new QuizTemplate();
	
	$pickSkills = new PickSkills();
	
	$template->displayHtml($pickSkills->getContent(),$pickSkills->getHeader(),$pickSkills->getFooter());
	
?>

