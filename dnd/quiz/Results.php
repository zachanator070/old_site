
<?php

	include "../database/DatabaseAccess.php";
	include "QuizTemplate.php";
	include_once "../model/Character.php";
	
	class Results{
		
		private $character; 
		private $combinedmod;
		
		public function __construct(){
			
			$this->character = new Character();
			$this->combinedmod = 0;
		}
		
		private function checkQuizResults(){
			
			//check to see if there are POST results, if so set them to the character object
			
			if(isset($_POST['two'])){
				
				if(isset($_POST['one'])){
					$this->character->name = $_POST['one'];
				}	
			
				//separate the questions that are assisiated with class and those with race
				$classanswers=array($_POST['two'],$_POST['four'],$_POST['five'],$_POST['six']);
				$raceanswers=array($_POST['three'],$_POST['seven'],$_POST['eight']);
				
				//questions will be key-value pairs of class, number
				//the race with the most questions assigned to it will be the selected race
				
				//add up the questions with assosiated classes
				$count=array_count_values($classanswers);
				
				//sort the array with the class with the highest value as first
				arsort($count);
				
				//get all the classes
				$keys=array_keys($count);
				
				//the winner is the first one in the array of classes
				$this->character->class = $keys[0];
				
				
				//same algorithm
				$count=array_count_values($raceanswers);
				arsort($count);
				$keys=array_keys($count);
				$this->character->race = $keys[0];
			
				$attributes=array();
				
				switch($this->character->class){
					case 'Marine':$attributes=array(13,14,13,13,9,11);break;
					case 'Savage':$attributes=array(14,12,12,10,9,12);break;
					case 'Doc':$attributes=array(10,12,12,13,14,12);break;
					case 'Thief':$attributes=array(12,16,10,12,9,11);break;
					case 'Survivalist':$attributes=array(13,9,15,10,13,14);break;
					case 'Tech':$attributes=array(11,13,9,15,14,11);break;
				}
				
				$this->character->attributes = $attributes;
				
				$attrmod="";
				
				switch($this->character->race){
					case 'Average Joe':$attrmod=array(0,0,0,0,0,0);break;
					case 'Android':$attrmod=array(1,1,-1,0,0,0);break;
					case 'Ghoul':$attrmod=array(0,1,0,0,1,-1);break;
					case 'Mutant':$attrmod=array(0,0,0,1,0,0);break;
				}
				
				$comb=0;
				
				for($x=0;$x<6;$x++){
					
					$comb=$comb.($attributes[$x]+$attrmod[$x]);
					
					if($x!=5){
						$comb=$comb.",";
					}
				}					
				
				$this->combinedmod = $comb;
				
				return "<h1>Congratulations! You were placed as a ".$this->character->race." ".$this->character->class."!</h1>";
			}
			
			else{
				
				return "";
			}
			
		}
		
		public function getHeader(){
			
			$header = "<script language='javascript'>\n var names = [''";
			
			$dbAccess = new DatabaseAccess();
			
			$allNames = $dbAccess->getAllCharacterNames();
			
			foreach($allNames as $value){
				$header = $header.",'".$value."'";
			}
			
			$header=$header."] </script>";
			$header = $header."\n<script language='javascript' src='results.js'></script>";
			
			return $header;
		}
		
		public function getContent(){
			
			$result = Results::checkQuizResults();
			
			//write some boolean array to help decide which option to put in document
			$selected = "selected='selected'";
			
			$raceOption = array("","","","");
			
			switch($this->character->race){
				case "Average Joe": 
					$raceOption[0]=$selected;
					break;
				case "Android":
					$raceOption[1]=$selected;
					break;
				case "Ghoul":
					$raceOption[2]=$selected;
					break;
				case "Mutant":
					$raceOption[3]=$selected;
					break;
			}
			
			$classOption = array("","","","","","");
			
			switch($this->character->class){
				case "Marine":
					$classOption[0]=$selected;
					break;
				case "Savage":
					$classOption[1]=$selected;
					break;
				case "Thief":
					$classOption[2]=$selected;
					break;
				case "Doc":
					$classOption[3]=$selected;
					break;
				case "Tech":
					$classOption[4]=$selected;
					break;
				case "Survivalist":
					$classOption[5]=$selected;
					break;
			}	
			
			$content = <<<"CONTENT"
			
				$result
			
				<h2>Input your character's attributes</h2>				
				<p>
				<h3>A few things to note before entering information:</h3>
				<ul>
					<li>For more information on race and class advantages/disadvantages see the player's guide under the "docs" section at the top.</li>
					<li>Overpowered or extremely weak characters are no fun to play with. A balanced character will have modifiers add up to about 5.</li>
				</ul>
				</p>
	
				<form action="PickSkills.php" method = "post" id="createform">
					Character Name:<input class="quiz_in" type="text" name= "name" value="{$this->character->name}"><br/><br/>	
					
					Race:
					<select name='race' id="race">
						<option value='Average Joe' onclick="applyrace()" $raceOption[0] >Average Joe</option>
						<option value='Android' onclick="applyrace()" $raceOption[1]>Android</option>
						<option value='Ghoul' onclick="applyrace()" $raceOption[2] >Ghoul</option>
						<option value='Mutant' onclick="applyrace()" $raceOption[3] >Mutant</option>
					</select>

					<br/>
					Class:
					<select name='class' id="class">
						<option value='Marine' $classOption[0] >Marine</option>
						<option value='Savage' $classOption[1] >Savage</option>
						<option value='Thief' $classOption[2] >Thief</option>
						<option value='Doc' $classOption[3] >Doc</option>
						<option value='Tech' $classOption[4] >Tech</option>
						<option value='Survivalist' $classOption[5] >Survivalist</option>
					</select>
					<br/>
					<br/>
					<br/>
					Race advantages:
					<br/><span id="raceadvantage"></span>
					<br/>
					<br/>
					<button type='button' onclick='randomgen()' id='randomize'>Randomize</button><br/><br/>
					<table class="quiz_table">	
						<tr><td class="quiz_td">Ability</td> <td>Value</td> <td class="smallcell">Race Bonus</td> <td>Modifier</td></tr>
						
						<tr><td>Strength:</td><td><input class="quiz_in" onkeyup='updatemods()' size='4' type="text" name= "strength" id="strength" value="0"></td>
						<td><div id="race_str_div">0</div></td><td><span></span></td></tr>
						
						<tr><td>Dexterity:</td><td><input class="quiz_in" onkeyup='updatemods()' size='4' type="text" name= "dexterity" id="dexterity" value="0"></td>
						<td><div id="race_dex_div">0</div></td><td><span></span></td></tr>
						
						<tr><td>Constitution:</td><td><input class="quiz_in" onkeyup='updatemods()' size='4' type="text" name= "constitution" id="constitution" value="0"></td>
						<td><div id="race_con_div">0</div></td><td><span></span></td></tr>
						
						<tr><td>Intelligence:</td><td><input class="quiz_in" onkeyup='updatemods()' size='4' type="text" name= "intelligence" id= "intelligence" value="0"></td>
						<td><div id="race_int_div">0</div></td><td><span></span></td></tr>
						
						<tr><td>Wisdom:</td><td><input class="quiz_in" onkeyup='updatemods()' size='4' type="text" name= "wisdom" id= "wisdom" value="0"></td>
						<td><div id="race_wis_div">0</div></td><td><span></span></td></tr>
						
						<tr><td>Charisma:</td><td><input class="quiz_in" onkeyup='updatemods()' size='4' type="text" name= "charisma" id="charisma" value="0"></td>
						<td><div id="race_cha_div">0</div></td><td><span></span></td></tr>
						
					</table>
					
					<input type="hidden" name= "race_str" id="race_str_in" value="0">
					<input type="hidden" name= "race_dex" id="race_dex_in" value="0">
					<input type="hidden" name= "race_con" id="race_con_in" value="0">
					<input type="hidden" name= "race_int" id="race_int_in" value="0">
					<input type="hidden" name= "race_wis" id="race_wis_in" value="0">
					<input type="hidden" name= "race_cha" id="race_cha_in" value="0">
					
					
					<br/><br/>
					PASSWORD:<input type='password' name='password' id="password"size='10'>
					<br/>
					CONFIRM PASSWORD:<input type='password' id="testpassword" size='10'>
					<br/<br/>
					
					<button type='button' onclick="checkcreate()">Next</button>
				</form>

CONTENT;
			
			if($this->character->name!='name'){
				
				$content=$content."\n<script language='javascript'> setattributes(new Array(".$this->combinedmod.")); applyrace(); </script>";
			}	
			
			$content = $content."<script language='javascript'>applyrace();updatemods();</script>";
			
			return $content;
			
		}
		
		
	}
	
	$results = new Results();
	$template = new QuizTemplate();
	
	$template->displayHtml($results->getContent(),$results->getHeader(),"");
?>

