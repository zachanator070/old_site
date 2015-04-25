<?php

	include_once '../database/DatabaseAccess.php';
	include_once 'CharsheetTemplate.php';
	include_once '../model/Character.php';
	include_once 'HtmlPrinter.php';
	include_once '../model/SkillDefinitions.php';
	
	class Charsheet{
		
		private $character;
		public $validated = false;
		
		function getHead(){
			$head = <<<HEAD
				<script language="javascript" src="../../jquery.js"></script>
				<script language="javascript" src="charsheet.js"></script>
				<script language="javascript" src="../quiz/pickskills.js"></script>
HEAD;
		
			return $head;
		}
		
		function getFooter(){
			$foot = "";
			return $foot;
		}
		
		function getContent(){
		
			$content ="";
		
			$dac = new DatabaseAccess();
		
			$allNames= $dac->getAllCharacterNames();
			
			$loader = <<<"LOAD"
				<form id="loader" action="Charsheet.php" method="post">
					CHARACTER:<select name = "name">
LOAD;
			foreach($allNames as $value){
				$loader = $loader."<option value='".$value."'>".$value."</option>";
			}
			
			$moreLoader = <<<MORE
				</select>
					<br/>
					PASSWORD:<input type='password' name='password' size='10'/>
					<input type="submit" value='Load'/>
				</form>
MORE;
			
			$content .= $loader.$moreLoader;
			
			
			session_start();
			
			$session = isset($_SESSION['name']);
			
			$name = "";
			
			//if a form was submitted to this page
			
			if(isset($_POST['name'])){
					if($dac->validatePassword($_POST['name'],$_POST['password'])){
						$this->validated = true;
						$name = $_POST['name'];
						$_SESSION['name'] = $name;
					}
					
					else{
						$wrong = "<h1>Wrong Password</h1>";
						$content.=$wrong;
						return $content;
					}
			}
			
			//no form but session data exists
			else if(isset($_SESSION['name'])){
				
				$this->validated = true;
				$name = $_SESSION['name'];
			}
			
			//no previous data exists
			else{
				return $content;
			}
			
			$html = new HtmlPrinter();
			
			//check if password is correct
			
			//gather information from database
			$this->character = $dac->fetchCharacter($name);
			
			$content .= $html->printFormHeader($this->character);
			
			$content .= "<div id='leftpane'>";
			
			/*INFO*/
			
			$content .= $html->printInfo($this->character);
			
			/*STATS*/
			
			$content .= $html->printStats($this->character);
			
			/*DEFENSE*/

			$content .= $html->printDefense($this->character);
			
			/*SAVES*/
			
			$content .= $html->printSaves($this->character);
	
			$content .= "</div>";
			
			$content .= "<div id='rightpane'>";
			
			/*SKILLS*/
			
			$content .= $html->printSkills($this->character);
			
			$content .= "</div>";
			
			$content .= "<div id='bottompane'>";	
			
			/*ATTACKS*/ 
			
			$content .= $html->printAttacks($this->character);
			
			
			/*FEATS*/
			
			$content .= $html->printFeats($this->character);
			
			
			/*EQUIPMENT*/
			
			$content .= $html->printEquipment($this->character);
			
			/*PICTURES*/
			
			$content .= $html->printPictures($this->character);
			
			$content .= "</div>";
			
			$content .= $html->printFormFooter();
			
			return $content;
			
		}
		
		function getOther(){
			
			$other ="";
			
			if(!$this->validated){
				return $other;
			}
			
			$saveButton = <<<"SAVE"
				<div id='savebutton'>
					<p class='link'><a onclick='checksheet()' class='link'>Save</a></p>
				</div>
SAVE;
			
			$levelUp = <<<"LEVEL"
			
				<div id='levelbutton'>
					<p class='link'><a onclick='goToLevelUp()' class='link'>Level Up</a></p>
				</div>
				
				<form id='levelform' method="post" action='LevelUp.php'>
					<input type='hidden' value='{$this->character->name}' name='name'/>
				</form>
				
LEVEL;
			
			
			$other = $saveButton.$levelUp;
			
			return $other;
			
		}

	}

	$charsheet = new Charsheet();
	$template = new CharsheetTemplate();
	
	$template->printHtml($charsheet->getContent(),$charsheet->getHead(),$charsheet->getFooter(),$charsheet->getOther());
	
	//error_log("printed html");
?>
