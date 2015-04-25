<?php

	include '../database/DatabaseAccess.php';
	include_once '../model/Skill.php';
	include_once '../model/Feat.php';
	include_once '../model/SkillDefinitions.php';
	
	class ApplyLevelUp{
	
		private $character;
		private $db;
		
		function __construct(){
			
			$this->db = new DatabaseAccess();
			$this->character = $this->db->fetchCharacter($_POST['name']);
		
		}
	
		function submitChanges(){
			
			$this->character->level+=1;
			$levelSaves = SkillDefinitions::$classSaves[$this->character->class][$this->character->level];
			
			$this->character->saves['fort_base'] =$levelSaves[0];
			$this->character->saves['reflex_base'] =$levelSaves[1];
			$this->character->saves['will_base'] =$levelSaves[2];
			
			$this->character->defense['hp']+=$_POST['moreHealth'];
			
			foreach($_POST['skill'] as $key=>$name){
				
				$ranks = $_POST['rank'][$key];
				$misc = $this->character->skills[$key]->misc;
				$ability = SkillDefinitions::getSkillAbility($name);
				$class = 0;
				
				$skill = new Skill($class,$name,$ranks,$misc,$ability);
				
				array_push($this->character->skills,$skill);
			}
			
			if(isset($_POST['skillbox'])){
				foreach($_POST['skillbox'] as $boxKey=>$boxName){
				
					foreach($this->character->skills as $skillKey=>$skill){
						if($skill->name == $boxName){
							$this->character->skills[$skillKey]->class =1;
						}
					}
				
				}
			}
			
			if(isset($_POST['newAbility'])){
				$this->character->attributes[$_POST['newAbility']]+=1;
			}
			
			if($_POST['newFeat']=="true"){
				$newFeat = new Feat($_POST['newFeatName'],$_POST['newFeatDescription']);
				array_push($this->character->feats,$newFeat);
			}
		
			$this->db->updateCharacter($this->character);
			
			header("Location: ../charsheet/Charsheet.php");
		}

	}
	
	$apply = new ApplyLevelUp();
	$apply->submitChanges();

?>
