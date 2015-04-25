
<?php
	
	include '../model/SkillDefinitions.php';
	include '../model/Character.php';
	include '../model/Skill.php';
	include '../model/Attack.php';
	include '../model/Feat.php';

	class DatabaseAccess{

		private $host = "thezachcave.com";
		private $dbuser = "dnd";
		private $dbpassword = "datadog";
		private $db = "dnd";

		private $con;
		private $conected = true;
		
		public function __construct(){
			$this->con = mysqli_connect($this->host,$this->dbuser,$this->dbpassword,$this->db);
			$this->checkConnection();
		}
		
		private function checkConnection(){
			if (!$this->con)
			{
				die("Failed to connect to Character Database: " . mysqli_error($this->con)."<br/>");
				$conected= false;
			}
		}

		public function getAllCharacterNames(){
			
			$allNames = array();
			  
			$names = mysqli_query($this->con,"SELECT name FROM info");
			
			$index =0;
			while($array = mysqli_fetch_array($names)){
				$allNames[$index] = $array['name'];
				$index++;
			}

			return $allNames;

		}
		
		public function fetchCharacter($name){
			
			$character = new Character();
			
			$character->name = $name;
			
			$info = $this->getCharacterInfo($name);
			
			$character->player= $info['player'];
			$character->class= $info['class'];
			$character->level= $info['level'];
			$character->race= $info['race'];
			$character->age= $info['age'];
			$character->gender= $info['gender'];
			$character->background= $info['background'];
			
			$character->password = $info['password'];
			
			$character->attributes = $this->getCharacterAttributes($name);
			$character->defense = $this->getCharacterDefense($name);
			$character->saves = $this->getCharacterSaves($name);
			$character->skills = $this->getCharacterSkills($name);
			$character->attacks = $this->getCharacterAttacks($name);
			$character->feats = $this->getCharacterFeats($name);
			$character->equipment = $this->getCharacterEquipment($name)['list'];
			$character->voltz = $this->getCharacterEquipment($name)['gold'];
			
			return $character;
			
		}
		
		public function getCharacterInfo($name){
			$result = mysqli_fetch_array(mysqli_query($this->con,"SELECT * from info where name ='".$name."'"));
			return $result;
		}
		
		public function getCharacterAttributes($name){
			$result = mysqli_fetch_array(mysqli_query($this->con,"SELECT * from stats where name ='".$name."'"));
			return $result;
		}
		
		public function getCharacterDefense($name){
			$result = mysqli_fetch_array(mysqli_query($this->con,"SELECT * from defense where name ='".$name."'"));
			return $result;
		}
		
		public function getCharacterSaves($name){
			$result = mysqli_fetch_array(mysqli_query($this->con,"SELECT * from saves where name ='".$name."'"));
			return $result;
		}
		
		public function getCharacterSkills($name){
			$skillsResults = mysqli_query($this->con,"SELECT * from skills where name ='".$name."'");
			$result= array();
			
			//from mysql data to skill objects
			$x=0;
			while($row = mysqli_fetch_array($skillsResults)){
					$result[$x] =new Skill($row['class'],$row['skill'],$row['ranks'],$row['misc'],$row['ability']);
					$x++;
			}
			
			return $result;
		}
		
		public function getCharacterAttacks($name){
			$attacks_query = mysqli_query($this->con,"SELECT * from attacks where name ='".$name."'");
			
			$result = array();
			
			//from mysql data into attack objects
			$x=0;
			while($row = mysqli_fetch_array($attacks_query)){
					$result[$x] =new Attack($row['attack_name'],$row['damage'],$row['critical'],$row['description']);
					$x++;
			}
			
			return $result;
			
		}
		
		public function getCharacterFeats($name){
			$feats_query = mysqli_query($this->con,"SELECT * from feats where name ='".$name."'");
		
			$result = array();
			//from mysql data into feat objects
			$x=0;
			while($row = mysqli_fetch_array($feats_query)){
					$result[$x] =new Feat($row['feat'],$row['description']);
					$x++;
			}
			
			return $result;
		}
		
		public function getCharacterEquipment($name){
			$result = mysqli_fetch_array(mysqli_query($this->con,"SELECT * from equipment where name ='".$name."'"));
			
			return $result;
		}
		
		public function createCharacter($character){
				
				$checkName = "SELECT * FROM info where name='".$character->name."'";
				$result = mysqli_query($this->con,$checkName);
				
				if($result->num_rows>0){
					mysqli_close($this->con);
					error_log(print_r($result,true));
					return "Character already exists: ".$character->name;
				}
				
				
				mysqli_query($this->con,"START TRANSACTION");
				
				$query[0]="INSERT INTO stats(name, strength, dexterity, constitution, intelligence, wisdom, charisma, str_temp, dex_temp, con_temp, int_temp, wis_temp, cha_temp) VALUES('"
					.$character->name."', "
					.$character->attributes['strength'].", "
					.$character->attributes['dexterity'].", "
					.$character->attributes['constitution'].", "
					.$character->attributes['intelligence'].", "
					.$character->attributes['wisdom'].", "
					.$character->attributes['charisma'].", 0, 0, 0, 0, 0, 0)"; 
				$query[1]="INSERT INTO info(name, player,class, level, race, age, gender, background, password) VALUES('".$character->name."', 'player', '".$character->class."', '1', '".$character->race."', 'age', 'gender', 'background','".$character->password."')"; 
				$query[2]="INSERT INTO saves(name, fort_base, fort_misc, reflex_base, reflex_misc, will_base, will_misc) VALUES('".$character->name."', ".$character->saves['fort_base'].", 0,".$character->saves['reflex_base'].",0,".$character->saves['will_base'].",0)"; 
				$query[3]="INSERT INTO defense(name, hd, hp, hp_cur, ap_armor, ap_shield, ap_misc, radiation, resistance,armor_weight) VALUES('".$character->name."', '".$character->defense['hd']."', ".$character->defense['hp'].",".$character->defense['hp_cur'].",0,0,0,0,0,'light, med, or heavy')";
				$query[4]="INSERT INTO equipment(name, list, gold) VALUES('".$character->name."', 'Nothing!', 0)";
				
				//skills
				
				
				foreach($character->skills as $key=>$value){
					
					$query[$key+5]= "INSERT INTO skills (name, skill, ability, ranks, misc, class) values('".$character->name."','".$value->name."','".$value->ability."','".$value->ranks."','0','".$value->class."')";
					
				}
				
				
				foreach($query as $key=>$value){
					$result = mysqli_query($this->con,$value);
						
					if (!$result) {
						die('Invalid query : '. mysqli_error($this->con)."<br/>");
						mysqli_query($this->con,"ROLLBACK");
					}
				}
				
				mkdir("../characters/".$character->name);
				chmod("../characters/".$character->name, 0777);
				mysqli_query($this->con,"COMMIT");
				mysqli_close($this->con);
				
				return "Created ".$character->name." successfully!";
			
		}
		
		
		function validatePassword($name,$password){
		
			$charpassword =mysqli_fetch_array(mysqli_query($this->con,"SELECT password from info where name='".$name."'"));
			
			if($charpassword[0]==$password){
				return true;
			}
			
			else{
				return false;
			}

		}
		
		public function updateCharacter($character){
			
			$queries[0]="UPDATE stats SET strength=".$character->attributes['strength'].", dexterity=".$character->attributes['dexterity'].", constitution =".$character->attributes['constitution'].", intelligence=".$character->attributes['intelligence'].", wisdom =".$character->attributes['wisdom'].", charisma=".$character->attributes['charisma']." where name ='".$character->name."'"; 
			$queries[1]="UPDATE stats SET str_temp=".$character->attributes['str_temp'].", dex_temp=".$character->attributes['dex_temp'].", con_temp =".$character->attributes['con_temp'].", int_temp=".$character->attributes['int_temp'].", wis_temp =".$character->attributes['wis_temp'].", cha_temp=".$character->attributes['cha_temp']." where name ='".$character->name."'"; 
			$queries[2]="UPDATE info SET player='".$character->player."', class='".$character->class."', level =".$character->level.", race='".$character->race."', age=".$character->age.", gender='".$character->gender."', background='".$character->background."' where name ='".$character->name."'"; 
			$queries[3]="UPDATE saves SET fort_base=".$character->saves['fort_base'].", fort_misc=".$character->saves['fort_misc'].", reflex_base=".$character->saves['reflex_base'].", reflex_misc=".$character->saves['reflex_misc'].", will_base=".$character->saves['will_base'].", will_misc=".$character->saves['will_misc']." where name='".$character->name."'";
			$queries[4]="UPDATE defense SET hd='".$character->defense['hd']."', hp =".$character->defense['hp'].", hp_cur=".$character->defense['hp_cur'].", ap_armor=".$character->defense['ap_armor'].", ap_shield= ".$character->defense['ap_shield'].", ap_misc=".$character->defense['ap_misc'].", radiation=".$character->defense['radiation'].", resistance=".$character->defense['resistance'].", armor_weight='".$character->defense['armor_weight']."' where name='".$character->name."'";
			$queries[5]="UPDATE equipment SET list='".$character->equipment."', gold =".$character->voltz." where name ='".$character->name."'";
			$queries[6]="DELETE from attacks where name='".$character->name."'";
			$queries[7]="UPDATE skills set class=0 where name='".$character->name."'";
			$queries[8]="DELETE from feats where name='".$character->name."'";
			
			
			foreach($queries as $query){
				
				$result = mysqli_query($this->con,$query);
					
				if (!$result) {
					die('Invalid query: ' . mysqli_error($this->con)."<br/>");
				}
			}
			

			foreach($character->attacks as $attack){
				
				$submit = "INSERT INTO attacks(name, attack_name, damage, critical, description) VALUES('".$character->name."', '".$attack->name."', '".$attack->damage."', '".$attack->critical."', '".$attack->description."' )";
				$result = mysqli_query($this->con,$submit);
				if (!$result) {
					die('Invalid query: ' . mysqli_error($this->con)."<br/>");
				}
			}
			
			
			foreach($character->feats as $feat){
				
				$submit = "INSERT INTO feats(name, feat, description) VALUES('".$character->name."', '".$feat->name."', '".$feat->description."' )";
				$result = mysqli_query($this->con,$submit);
				if (!$result) {
					die('Invalid query: ' . mysqli_error($this->con)."<br/>");
				}
			}
		
			foreach($character->skills as $skill){
				
				$submit = "update skills set ranks=".$skill->ranks.",class=".$skill->class.",misc=".$skill->misc." where name='".$character->name."' and skill='".$skill->name."'";
				$result = mysqli_query($this->con,$submit);
				if (!$result) {
					die('Invalid query: ' . mysqli_error($this->con)."<br/>");
				}
			}
			
		}
		
		public function uploadPictures($name){

			move_uploaded_file($_FILES['file']['tmp_name'],"../characters/".$name."/". mysqli_real_escape_string($this->con,$_FILES['file']['name']));
	
			if(isset($_POST['pictures'])){
				foreach($_POST['pictures'] as $key=>$value){
					
					if($value=='true'){
					
					$picname=mysqli_real_escape_string($this->con,$_POST['picturename'][$key]);
					
					unlink('../characters/'.$name.'/'.$picname);
					}
				}
			}
			
		}
		
	}
	
?>
