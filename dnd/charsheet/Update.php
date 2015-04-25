<?php

	include '../database/DatabaseAccess.php';
	include_once '../model/Character.php';
	include_once '../model/Feat.php';
	include_once '../model/Skill.php';
	include_once '../model/Attack.php';
	include_once '../model/SkillDefinitions.php';
	
	class Update{
	
		public function characterFromPost(){
		
			$character = new Character();

			$character->name = $_POST['name'];
			$character->player = $_POST['player'];
			$character->class = $_POST['class'];
			$character->race = $_POST['race'];
			$character->level = $_POST['level'];
			$character->age = $_POST['age'];
			$character->gender = $_POST['gender'];
			$character->background = $_POST['background'];
		
			$character->attributes['strength'] = $_POST['strength'];
			$character->attributes['str_temp'] = $_POST['str_temp'];
			$character->attributes['dexterity'] = $_POST['dexterity'];
			$character->attributes['dex_temp'] = $_POST['dex_temp'];
			$character->attributes['constitution'] = $_POST['constitution'];
			$character->attributes['con_temp'] = $_POST['con_temp'];
			$character->attributes['intelligence'] = $_POST['intelligence'];
			$character->attributes['int_temp'] = $_POST['int_temp'];
			$character->attributes['wisdom'] = $_POST['wisdom'];
			$character->attributes['wis_temp'] = $_POST['wis_temp'];
			$character->attributes['charisma'] = $_POST['charisma'];
			$character->attributes['cha_temp'] = $_POST['cha_temp'];
			
			$character->saves['fort_base'] = $_POST['fort_base'];
			$character->saves['fort_misc'] = $_POST['fort_misc'];
			$character->saves['reflex_base'] = $_POST['reflex_base'];
			$character->saves['reflex_misc'] = $_POST['reflex_misc'];
			$character->saves['will_base'] = $_POST['will_base'];
			$character->saves['will_misc'] = $_POST['will_misc'];
			
			$character->defense['hd'] = $_POST['hd'];
			$character->defense['hp'] = $_POST['hp'];
			$character->defense['hp_cur'] = $_POST['hp_cur'];
			$character->defense['ap_armor'] = $_POST['ap_armor'];
			$character->defense['ap_shield'] = $_POST['ap_shield'];
			$character->defense['ap_misc'] = $_POST['ap_misc'];
			$character->defense['radiation'] = $_POST['radiation'];
			$character->defense['resistance'] = $_POST['resistance'];
			$character->defense['armor_weight'] = $_POST['armor_weight'];
			
			$character->voltz = $_POST['gold'];
			$character->equipment = $_POST['equipement'];
		
			if(isset($_POST['attack_name'])){
				foreach($_POST['attack_name'] as $key=>$value){
					
					$name = $value;
					$damage = $_POST['damage'][$key];
					$description = $_POST['description'][$key];
					$critical = $_POST['critical'][$key];
					
					$attack = new Attack($name,$damage,$critical,$description);
					
					array_push($character->attacks,$attack);
				}
			}
			
			if(isset($_POST['feat_name'])){
				foreach($_POST['feat_name'] as $key=>$value){
					
					$name = $value;
					$description = $_POST['feat_description'][$key];
					
					$feat = new Feat($name,$description);
					
					array_push($character->feats,$feat);
				}
			}
			
			foreach($_POST['skill'] as $key=>$value){
				
				
				
				$name = $value;
				$ranks = $_POST['rank'][$key];
				$misc = $_POST['miscrank'][$key];
				$ability = SkillDefinitions::getSkillAbility($value);
				$class = 0;
				
				$skill = new Skill($class,$name,$ranks,$misc,$ability);
				
				array_push($character->skills,$skill);
			}
			
			if(isset($_POST['skillbox'])){
				foreach($_POST['skillbox'] as $boxKey=>$boxName){
				
					foreach($character->skills as $skillKey=>$skill){
						if($skill->name == $boxName){
							$character->skills[$skillKey]->class =1;
						}
					}
				
				}
			}
			
			return $character;
		}
		
		public function redirect(){
			
			$newURL = "Charsheet.php";
			header('Location: '.$newURL);
			
		}

	}
	
	$updater = new Update();
	$character = $updater->characterFromPost();
	
	$dac = new DatabaseAccess();
	
	$dac->updateCharacter($character);

	$dac->uploadPictures($character->name);
	$updater->redirect();
?>
