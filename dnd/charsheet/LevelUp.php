<?php

	include 'CharsheetTemplate.php';
	include '../database/DatabaseAccess.php';
	include 'HtmlPrinter.php';

	class LevelUp{
		
		private $character;
		
		function __construct(){
			$db = new DatabaseAccess();
			
			$this->character=$db->fetchCharacter($_POST['name']);
			
		}
		
		function getHeader(){
			$head = <<<"HEAD"
				<script language='javascript' src='levelup.js'></script>
				<script language='javascript' src='../quiz/pickskills.js'></script>
HEAD;
			return $head;
		}
		
		function generateSkillTable(){
			
			$max=$this->character->level+4;
			
			$html= "Max Class skill ranks: ".$max."<br/>";
			$html.= "Max non-class skill ranks:".$max/2;
			
			$html.="\n<table>\n";
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
			
			$level = $this->character->level+1;
			$hd = SkillDefinitions::$classHd[$this->character->class];
			
			$newSkills = find_mod($this->character->attributes['intelligence'])+SkillDefinitions::$classSkillBase[$this->character->class];
			
			
			
			$totalSkills = $newSkills;
			
			foreach($this->character->skills as $skill){
				$totalSkills+=$skill->ranks;
			}
			
			$extraFeat = "";
			
			if($level%3==0){
				$extraFeat = <<<"FEAT"
					You are able to select another feat! <br/>
					It is advised to open up another tab to look at the
					"feat" section in the player's guide to find a feat that is
					right for you.<br/>
					Feat Name:
					<input type='text' size='4' name='newFeatName'/>
					<br/>
					Feat Description:
					<textarea rows='4' class='largecell' cols ='35' name='newFeatDescription'></textarea>
					<br/>
					<input type="hidden" name="newFeat" id="newFeat"value = "true"/>
FEAT;
			}
			
			$extraAbility = "";
			
			if($level%4==0){
				$extraAbility = <<<"ABILITY"
					You are able to put one point into an ability. Your current score for each ability is displayed next to each button:<br/>
					<input type='radio' name='newAbility' value='strength'>Strength({$this->character->attributes['strength']})<br/>
					<input type='radio' name='newAbility' value='dexterity'>Dexterity({$this->character->attributes['dexterity']})<br/>
					<input type='radio' name='newAbility' value='constitution'>Constitution({$this->character->attributes['constitution']})<br/>
					<input type='radio' name='newAbility' value='intelligence'>Intelligence({$this->character->attributes['intelligence']})<br/>
					<input type='radio' name='newAbility' value='wisdom'>Wisdom({$this->character->attributes['wisdom']})<br/>
					<input type='radio' name='newAbility' value='charisma'>Charisma({$this->character->attributes['charisma']})<br/>
					<br/>
ABILITY;
			
			}
			
			$skillTable = $this->generateSkillTable();
			
			
			$level = <<<"LEVEL"
		
				<form method='post' action='ApplyLevelUp.php'>
				<input type="hidden" name="startingskills" id="startingskills" value = "$totalSkills">
				<input type="hidden" id="level" value = "$level">
				<input type='hidden' name='name' value="{$this->character->name}">
					
					<p>
						Congrats and welcome to level $level !<br/>
						You have a few things that you can change now that you
						have grown a level.<br/><br/>
					</p>
					<p>
						The first thing to do is increase your health.<br/>
						Your hit die is a d$hd so you can roll a d$hd and add that amount
						to your total health here:<br><br/>
						Health : {$this->character->defense['hp']} + <input type='text' size='2' name='moreHealth'/><br/>
						
					</p>
				
					<p>
						You are now more skillful and have more ranks to assign to skills.
						<br/><br/>
						Skills remaining:
						<span id="remaining">
							$newSkills
						</span>
						
						<br/>
						
						$skillTable
						
						<br/>
					</p>
						
					<p>
						$extraFeat
					</p>
					
					<p>
						$extraAbility
					</p>
					
					<input type='Submit' value='Submit'>
				
				</form>
LEVEL;
			return $level;
		}

	}
	
	$levelup = new LevelUp();
	
	$template = new CharsheetTemplate();
	
	$template->printHtml($levelup->getContent(),$levelup->getHeader(),'','');
?>
