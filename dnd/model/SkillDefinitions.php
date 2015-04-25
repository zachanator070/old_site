
<?php
	
	class SkillDefinitions{

		public static $classSkills = array(
				"Marine"=>array("Climb","Diplomacy","Electronics","Explosives","Heal","Heavy Weapons","Intimidate","Knowledge","Listen","Melee Weapons","Pistols","Profession","Rifles","Spot","Swim","Survival"),
				"Savage"=>array("Climb","Cooking","Explosives","Handle Animal", "Heacy Weapons","Intimidate","Jump","Listen","Melee Weapons","Pistols","Spot","Survival","Swim"),
				"Thief"=>array("Appraise","Balance","Bluff","Climb","Craft","Disable Device","Disguise","Electronics","Escape Artist","Forgery","Gather Information","Hide","Jump","Knowledge","Listen","Melee Weapons","Move Silently",
				"Open Lock","Sleight of Hand","Spot","Swim"),
				"Tech"=>array("Appraise","Craft","Decking","Electronics","Explosives","Gather Information","Knoledge","Listen","Melee Weapons","Pistols","Profession","Rifles","Science","Spot"),
				"Survivalist"=>array("Appraise","Bluff","Climb","Cooking","Craft","Disguise","Explosives","Gather Information","Handle Animal","Heal","Heavy Weapons","Hide","Jump Listen","Melee Weapons","Pistols","Rifles",
				"Spot","Survival","Swim"),
				"Doc"=>array("Appraise","Bluff","Cooking","Craft","Diplomacy","Forgery","Gather Information","Heal","Knowledge","Listen","Medicine","Melee Weapons","Pistols","Profession","Science","Sense Motive","Spot")
				);
				
		public static $skillAbilities = array(
				"Appraise"=>"INT",
				"Balance"=>"DEX",
				"Bluff"=>"CHA",
				"Climb"=>"STR",
				"Cooking"=>"WIS",
				"Craft"=>"INT",
				"Decking"=>"INT",
				"Diplomacy"=>"CHA",
				"Disable Device"=>"INT",
				"Disguise"=>"CHA",
				"Electronics"=>"INT",
				"Escape Artist"=>"DEX",
				"Explosives"=>"WIS",
				"Forgery"=>"INT",
				"Gather Information"=>"CHA",
				"Handle Animal"=>"CHA",
				"Heal"=>"WIS",
				"Heavy Weapons"=>"STR",
				"Hide"=>"DEX",
				"Intimidate"=>"CHA",
				"Jump"=>"STR",
				"Knowledge"=>"WIS",
				"Listen"=>"WIS",
				"Medicine"=>"INT",
				"Melee Weapons"=>"STR",
				"Move Silently"=>"DEX",
				"Open Lock"=>"DEX",
				"Pistols"=>"DEX",
				"Profession"=>"WIS",
				"Rifles"=>"DEX",
				"Science"=>"INT",
				"Sense Motive"=>"WIS",
				"Sleight of Hand"=>"DEX",
				"Spot"=>"WIS",
				"Survival"=>"STR",
				"Swim"=>"STR"
				);
			
			public static $classHd = array(
				"Marine"=>10,
				"Savage"=>12,
				"Doc"=>4,
				"Thief"=>6,
				"Survivalist"=>8,
				"Tech"=>4
				);
				
			public static $classSkillBase = array(
				"Marine"=>4,
				"Savage"=>2,
				"Doc"=>6,
				"Thief"=>8,
				"Survivalist"=>4,
				"Tech"=>4
				);
				
			public static $classSaves = array(
				"Marine"=> array(
					1=>array(1,0,0),
					2=>array(3,0,0),
					3=>array(3,1,1),
					4=>array(4,1,1),
					5=>array(4,1,1),
					6=>array(5,2,2),
					7=>array(5,2,2),
					8=>array(6,2,2),
					9=>array(6,3,3),
					10=>array(7,3,3)
				),
				"Savage"=>array(
					1=>array(2,0,0),
					2=>array(3,0,0),
					3=>array(3,1,1),
					4=>array(4,1,1),
					5=>array(4,1,1),
					6=>array(5,2,2),
					7=>array(5,2,2),
					8=>array(6,2,2),
					9=>array(6,3,3),
					10=>array(7,3,3)
				),
				"Doc"=>array(
					1=>array(0,0,2),
					2=>array(0,0,3),
					3=>array(1,1,3),
					4=>array(1,1,4),
					5=>array(1,1,4),
					6=>array(2,2,5),
					7=>array(2,2,5),
					8=>array(2,2,6),
					9=>array(3,3,6),
					10=>array(3,3,7)
				),
				"Thief"=>array(
					1=>array(0,2,0),
					2=>array(0,3,0),
					3=>array(1,3,1),
					4=>array(1,4,1),
					5=>array(1,4,1),
					6=>array(2,5,2),
					7=>array(2,5,2),
					8=>array(2,6,3),
					9=>array(3,6,3),
					10=>array(3,7,3)
				),
				"Survivalist"=>array(
					1=>array(2,2,0),
					2=>array(3,3,0),
					3=>array(3,3,1),
					4=>array(4,4,1),
					5=>array(4,4,1),
					6=>array(5,5,2),
					7=>array(5,5,2),
					8=>array(6,6,2),
					9=>array(6,6,3),
					10=>array(7,7,3)
				),
				"Tech"=>array(
					1=>array(0,0,2),
					2=>array(0,0,3),
					3=>array(1,1,3),
					4=>array(1,1,4),
					5=>array(1,1,4),
					6=>array(2,2,5),
					7=>array(2,2,5),
					8=>array(2,2,6),
					9=>array(3,3,6),
					10=>array(3,3,7)
				)
			);
			
				
			public static function isClassSkill($class,$skill){
				
				if(in_array($skill,SkillDefinitions::$classSkills[$class])){
					
					return 1;
				}
				
				else{
					
					return 0;
				}
			}
			
			public static function getSkillAbility($skillName){
				
				return SkillDefinitions::$skillAbilities[$skillName];
				
			}
		
	}

?>
