<?php

//calculates modifiers
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

//this class is mainly incharge of printing out html text 

class HtmlPrinter{
	
	function printFormHeader($character){
		
		$formHeader = "<h1>".$character->name."</h1>";
		$formHeader.="<form name='charsheet' id ='charsheet' action='Update.php' method='post' enctype='multipart/form-data'>";
		
		return $formHeader;
		
	}
	
	function printInfo($character){
		
		$info = "";
		
		$info.="<a class='header' onclick='hide(document.getElementById(\"info\"))'>Description</a><br/>\n";
		$info.="<div id='info'>\n";
			$info.=$character->name."<input type='hidden' name ='name' value ='".$character->name."'><br/>\n";
			$info.="Player name:<input type='text' name ='player' value ='".$character->player."'><br/>\n";
			$info.= "Class:<input type='text' name ='class' value ='".$character->class."'><br/>\n";
			$info.= "Level:<input type='text' name ='level' size ='4' value ='".$character->level."'><br/>\n";
			$info.= "Race:<input type='text' name ='race' size ='15' value ='".$character->race."'><br/>\n";
			$info.= "Age:<input type='text' name ='age' size ='4' value ='".$character->age."'><br/>\n";
			$info.= "Gender:<input type='text' name ='gender' size ='8' value ='".$character->gender."'><br/>\n";
			$info.= "Background:<br/><textarea name ='background' rows='10' cols='25'>".$character->background."</textarea><br/>\n";
		$info.= "</div>\n\n";
		
		return $info;
		
	}
	
	function printStats($character){
		
		$html = "";

		$html.= "<a class='header' onclick='hide(document.getElementById(\"stats\"))'>Abilities</a><br/>\n";
		$html.= "<div id='stats'>\n";			
		
		$html.= "<table>\n";
			$html.= "<tr><td></td><td>Modifier</td><td>Total</td><td> = </td><td>Base</td><td> + </td><td>Temp</td></tr>\n";
			
			$strength = $character->attributes['strength']+$character->attributes['str_temp'];
			
			$html.= "<tr>\n";
				$html.= "<td>Strength: </td>\n";
				$html.= "<td>".find_mod($strength)."</td>\n";
				$html.= "<td>".$strength."</td>\n";
				$html.= "<td> = </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'strength' value = '".$character->attributes['strength']."'> </td>\n";
				$html.= "<td> + </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'str_temp' value = '".$character->attributes['str_temp']."'></td>\n";
			$html.= "</tr>\n\n";
			
			$dexterity = $character->attributes['dexterity']+$character->attributes['dex_temp'];
			
			$html.= "<tr>\n";
				$html.= "<td>Dexterity: </td>\n";
				$html.= "<td>".find_mod($dexterity)."</td>\n";
				$html.= "<td>".$dexterity."</td>\n";
				$html.= "<td> = </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'dexterity' value = '".$character->attributes['dexterity']."'> </td>\n";
				$html.= "<td> + </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'dex_temp' value = '".$character->attributes['dex_temp']."'></td>\n";
			$html.= "</tr>\n\n";
			
			$constitution = $character->attributes['constitution']+$character->attributes['con_temp'];
			
			$html.= "<tr>\n";
				$html.= "<td>Constitution: </td>\n";
				$html.= "<td>".find_mod($constitution)."</td>\n";
				$html.= "<td>".$constitution."</td>\n";
				$html.= "<td> = </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'constitution' value = '".$character->attributes['constitution']."'> </td>\n";
				$html.= "<td> + </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'con_temp' value = '".$character->attributes['con_temp']."'></td>\n";
			$html.= "</tr>\n\n";
			
			$intelligence = $character->attributes['intelligence']+$character->attributes['int_temp'];
			
			$html.= "<tr>\n";
				$html.= "<td>Intelligence: </td>\n";
				$html.= "<td>".find_mod($intelligence)."</td>\n";
				$html.= "<td>".$intelligence."</td>\n";
				$html.= "<td> = </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'intelligence' value = '".$character->attributes['intelligence']."'> </td>\n";
				$html.= "<td> + </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'int_temp' value = '".$character->attributes['int_temp']."'></td>\n";
			$html.= "</tr>\n\n";
			
			$wisdom = $character->attributes['wisdom']+$character->attributes['wis_temp'];
			
			$html.= "<tr>\n";
				$html.= "<td>Wisdom: </td>\n";
				$html.= "<td>".find_mod($wisdom)."</td>\n";
				$html.= "<td>".$wisdom."</td>\n";
				$html.= "<td> = </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'wisdom' value = '".$character->attributes['wisdom']."'> </td>\n";
				$html.= "<td> + </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'wis_temp' value = '".$character->attributes['wis_temp']."'></td>\n";
			$html.= "</tr>\n\n";
			
			$charisma = $character->attributes['charisma']+$character->attributes['cha_temp'];
			
			$html.= "<tr>\n";
				$html.= "<td>Charisma: </td>\n";
				$html.= "<td>".find_mod($charisma)."</td>\n";
				$html.= "<td>".$charisma."</td>\n";
				$html.= "<td> = </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'charisma' value = '".$character->attributes['charisma']."'> </td>\n";
				$html.= "<td> + </td>\n";
				$html.= "<td><input type='text' class='smallcell' name= 'cha_temp' value = '".$character->attributes['cha_temp']."'></td>\n";
			$html.= "</tr>\n\n";
			
		$html.= "</table>\n";
		$html.= "</div>\n";
		
		return $html;
	}
	
	function printDefense($character){
		
		$html="";
		
		$html.= "<a class='header' onclick='hide(document.getElementById(\"defense\"))'>Defense</a><br/>\n";
		
		$html.= "<div id='defense'>\n";
		
		$html.= "Hit Die: <input type='text' size ='4' name ='hd' value='".$character->defense['hd']."'><br/>\n";
		$html.= "HP: <input type='text' size ='4' name='hp' value = '".$character->defense['hp']."'> \n";
		$html.= "Current HP: <input type='text' name='hp_cur' size ='4' value = '".$character->defense['hp_cur']."'><br/>\n";
		$html.= "<hr>";
		
		$dexterity = $character->attributes['dexterity'];
		
		$ap_total = $character->defense['ap_armor']+$character->defense['ap_shield']+$character->defense['ap_misc']+find_mod($dexterity);
		$html.= "<table>";
			$html.= "<tr><td></td><td>Armor</td><td></td><td>Shield</td><td></td><td>Misc</td><td></td><td>Dex</td></tr>\n";
			$html.= "<tr><td>AP: ".$ap_total." = </td><td><input type='text' class='smallcell' name ='ap_armor' value='".$character->defense['ap_armor']."'></td>\n";
				$html.= "<td>+</td><td><input type='text' class='smallcell' name ='ap_shield' value='".$character->defense['ap_shield']."'></td>\n";
				$html.= "<td>+</td><td><input type='text' class='smallcell' name ='ap_misc' value='".$character->defense['ap_misc']."'></td><td>+</td><td>".find_mod($dexterity)."</td></tr>\n";
		$html.= "</table>";
		$html.= "Max armor weight:<input type='text' class='medcell' name ='armor_weight' value='".$character->defense['armor_weight']."'>";
		$html.= "<hr>";
		
		$touch = $character->defense['ap_misc']+find_mod($dexterity);
		$html.= "Touch = AP - Armor<br/>\n";
		$html.= "Touch: ".$touch."<br/>\n";
		$html.= "<hr>";
		
		$flatfooted =  $character->defense['ap_armor']+$character->defense['ap_shield']+$character->defense['ap_misc'];
		$html.= "Flatfooted = AP - DEX<br/>\n";
		$html.= "Flatfooted: ".$flatfooted."<br/>\n";
		$html.= "<hr>";
		$html.= "Radiation: <input type='text' size ='4' name ='radiation' value='".$character->defense['radiation']."'><br/>\n";
		$html.= "Radiation Resistance: <input type='text' size ='4' name ='resistance' value='".$character->defense['resistance']."'><br/>\n\n";
		
		$html.= "</div>\n";
		
		return $html;
		
	}
	
	function printSaves($character){
		
		$html="";
		
		$html.= "<a class='header' onclick='hide(document.getElementById(\"saves\"))'>Saves</a><br/>\n";						
		
		$html.= "<div id='saves'>";
		
		$html.= "<table>";
		$html.= "<tr><td></td><td>Total</td><td></td><td>Base</td><td></td><td>Temp</td></tr>\n";
		
		$fort_total = $character->saves['fort_base'] + $character->saves['fort_misc'];
		$html.= "<tr><td>Foritude:</td><td>".$fort_total."</td>";
			$html.= "<td>=</td><td><input type='text' class='smallcell'  name ='fort_base' value='".$character->saves['fort_base']."'></td>";
			$html.= " <td>+</td><td><input type='text' class='smallcell' name='fort_misc' value='".$character->saves['fort_misc']."'></td></tr>\n";
			
		$reflex_total = $character->saves['reflex_base'] + $character->saves['reflex_misc'];
		$html.= "<tr><td>Reflex:</td><td>".$reflex_total."</td>";
			$html.= "<td>=</td><td><input type='text'  class='smallcell' name ='reflex_base' value='".$character->saves['reflex_base']."'></td>";
			$html.= "<td>+</td><td><input type='text'  class='smallcell' name='reflex_misc' value='".$character->saves['reflex_misc']."'></td></tr>\n";
		
		$will_total = $character->saves['will_base'] + $character->saves['will_misc'];
		$html.= "<tr><td>Will:</td><td>".$will_total."</td>";
			$html.= "<td>=</td><td><input type='text'  class='smallcell' name ='will_base' value='".$character->saves['will_base']."'></td>";
			$html.= "<td>+</td><td><input type='text' class='smallcell' name='will_misc' value='".$character->saves['will_misc']."'></td></tr>\n";
		
		$html.= "</table>";
		
		$html.= "</div>\n";
		
		return $html;
		
	}
	
	function generateSkillsTable($character){
		
		$html="";
		
		$max=$character->level+3;
		$html.= "Max Class skill ranks: ".$max."<br/>";
		$html.= "Max non-class skill ranks:".$max/2;
		$html.= "\n<table id='skilltable' border='1'>\n";
		$html.= "<tr><td>Class Skill</td><td class='medcell'>Skill</td><td>Modifier</td><td>Ranks</td><td>Misc</td><td>Total</td></tr>\n";
		
		
		//for each skill
		foreach($character->skills as $key=>$value){
			
			$html.="<tr>";
			
				//displays a checked or unchecked box
			if($character->skills[$key]->class==1){
				
				$html.= "<td><input type='checkbox' value='".$value->name."' name ='skillbox[]' checked/></td>";
			}
			
			else{
				
				$html.= "<td><input type='checkbox' value='".$value->name."' name ='skillbox[]'/></td>";
			}
			
			//display skill name and ranks
			$html.= "<td><input type='hidden' name ='skill[]' value='".$value->name."'>".$value->name."</td>";
			
			//finds the associated ability and displays the modifier
			$skillAbilityMod;
			switch($value->ability){
				
				case "STR":$skillAbilityMod=find_mod($character->attributes['strength']);break;
				case "DEX":$skillAbilityMod=find_mod($character->attributes['dexterity']);break;
				case "CON":$skillAbilityMod=find_mod($character->attributes['constitution']);break;
				case "INT":$skillAbilityMod=find_mod($character->attributes['intelligence']);break;
				case "WIS":$skillAbilityMod=find_mod($character->attributes['wisdom']);break;
				case "CHA":$skillAbilityMod=find_mod($character->attributes['charisma']);break;
				
			}
			
			$html.= "<td>".$value->ability." (".$skillAbilityMod.")</td>";
			$html.= "<td><input type='text' size='3' name ='rank[]' value='".$value->ranks."'/></td>";
			$html.= "<td><input type='text' size='3' name ='miscrank[]' value='".$value->misc."'/></td>";
			
			
			
			//display the total skill value
			$skilltotal = $skillAbilityMod + $value->ranks + $value->misc;
			$html.= "<td>".$skilltotal."</td></tr>\n";
			
		}
		
		$html.= "</table>";
		
		return $html;
	}
	
	
	function printSkills($character){
		
		$html ="";
		
		$html.= "<a class='header' onclick='hide(document.getElementById(\"skills\"))'>Skills</a><br/>\n";
		$html.= "<div id='skills'>";
		
		$html.=$this->generateSkillsTable($character);
		
		$html.= "</div>\n\n";
		
		return $html;
		
	}
	
	function printAttacks($character){
		
		$html="";
		
		$html.= "<a class='header' onclick='hide(document.getElementById(\"attacks\"))'>Attacks</a><br/>\n";
		$html.= "<div id='attacks'>\n";
		$html.= "<button type='button' onclick='addAttack()' >Add Row</button>\n";
		
		$html.= "<table border='1' id='attacktable'>\n";
		$html.= "<tr><td class='medcell'>Name</td><td class='medcell'>Damage</td><td class='medcell'>Critical</td><td class='largecell'>Description</td></tr>\n";
			
			
			//displays all the attacks in the attacks array
		for($x = 0;$x<count($character->attacks);$x++){
			$html.= "<tr id= 'row".($x+1)."'>\n";
			$html.= "<td><input type='text' class='medcell' name='attack_name[]' value='".$character->attacks[$x]->name."'></td>\n";
			$html.= "<td><input type='text' class='medcell' name='damage[]' value='".$character->attacks[$x]->damage."'></td>\n";
			$html.= "<td><input type='text' class='medcell' name='critical[]' value='".$character->attacks[$x]->critical."'></td>\n";
			$html.= "<td><input type='text' class='largecell' name='description[]' value='".$character->attacks[$x]->description."'></td>\n";
			$html.= "<td><button type='button' onclick='deleteAttack(\"row".($x+1)."\")' >delete</button></td>\n";
			$html.= "</tr>\n\n";
		}
		
		$html.= "</table>\n";
		$html.= "</div>\n\n";
		
		return $html;
		
	}
		
	function printFeats($character){
		
		$html = "";
		
		$html.= "<a class='header' onclick='hide(document.getElementById(\"feats\"))'>Feats</a><br/>\n";
		$html.= "<div id='feats'>\n";
		$html.= "<button type='button' onclick='addFeat()' >Add Row</button>\n";
		
		$html.= "<table border='1' id='feattable'>\n";
		$html.= "<tr><td class='medcell'>Name</td><td class='largecell'>Description</td></tr>\n";
			
		for($x = 0;$x<count($character->feats);$x++){
			$html.= "<tr id= 'row".($x+1)."'>\n";
			$html.= "<td><input type='text' class='medcell' name='feat_name[]' value='".$character->feats[$x]->name."'></td>\n";
			$html.= "<td><textarea rows='4' class='largecell' cols ='35' name='feat_description[]'>".$character->feats[$x]->description."</textarea></td>\n";
			$html.= "<td><button type='button' onclick='deleteFeat(\"row".($x+1)."\")' >delete</button></td>\n";
			$html.= "</tr>\n\n";
		}
		
		$html.= "</table>\n";
		$html.= "</div>\n\n";
		
		return $html;
	}	
	
	function printEquipment($character){
		
		$html = "";
		
		$html.= "<a class='header' onclick='hide(document.getElementById(\"equipment\"))'>Equipment</a><br/>\n";
		$html.= "<div id='equipment'>\n";
		$html.= "<div id='gold'>Voltz: <input id='goldval' type='text' size='5' name ='gold' value = '".$character->voltz."'></div>\n";
		$html.= "Equipment:<br/><textarea id='equipmentlist' name='equipement'>".$character->equipment."</textarea><br/><br/>\n";
		
		$html.= "</div>\n";
		
		return $html;
		
	}
	
	function printFormFooter(){
		$foot= "<h3>Click on a section name to show/hide it. Be sure to save your changes!! Save before leveling up for best results!</h3>\n";
		$foot.="</form>";
		
		return $foot;
	}
	
	function resize($width, $height){
						
		$resize= array(0,1);
		$tmp;
		
		if($height>$width){
				
			if($height>500){	
				
				$tmp =600;
				for($scale =1.25;($tmp)>500;$scale+=.25){
					$resize[0]=$width/$scale;
					$resize[1]=$height/$scale;		
					$tmp=$height/$scale;
				}
				
			}
			
			else{
				
				$tmp=400;
				for($scale =1.25;($tmp)<500;$scale+=.25){
					$resize[0]=$width*$scale;
					$resize[1]=$height*$scale;		
					$tmp=$height*$scale;
				}
				
			}
				
		}
		
		else{
		
			if($width>500){	
				
				$tmp=600;
				for($scale =1.25;($tmp)>500;$scale+=.25){
					$resize[0]=$width/$scale;
					$resize[1]=$height/$scale;		
					$tmp=$width/$scale;
				}
				
			}
			
			else{
				
				$tmp =400;
				for($scale =1.25;($tmp)<500;$scale+=.25){
					$resize[0]=$width*$scale;
					$resize[1]=$height*$scale;		
					$tmp=$width*$scale;
				}
			
			}
		}
		
		return array($resize[0]."px",$resize[1]."px");
	}

	function printPictures($character){
		
		$html = "";
		
		$html.= "<a class='header' onclick='hide(document.getElementById(\"pictures\"))'>Pictures</a><br/>"."\n";
		$html.= "<div id='pictures'>"."\n";
		$html.= "<p>**Picture files must be under 2MB. Click on a picture to mark it in red for deletetion**</p>";
		
		$html.= "<input type='file' name='file' id='file' /><br/>"."\n";
		
		$pictures = scandir('../characters/'.$character->name.'/',1);
		
		$size =count($pictures)-2;
		
			//foreach picture, display it
		
		for($x=0;$x<$size;$x++){
			$dim = getimagesize('../characters/'.$character->name.'/'.$pictures[$x]);
			$newwidth=$this->resize($dim[0],$dim[1])[0];
			$newheight=$this->resize($dim[0],$dim[1])[1];
			
			$html.= "<img class='dndpic' src='../characters/".$character->name."/".$pictures[$x]."' width = '".$newwidth."' height = '".$newheight."' id ='img".$pictures[$x]."' onclick='mark(this.id)'/>"."\n";
			$html.= "<input type='hidden' id='input".$pictures[$x]."' name ='pictures[]' value='false'/>"."\n";
			$html.= "<input type='hidden' name ='picturename[]' value='".$pictures[$x]."'/>"."\n";
			
		}
		
		
		$html.= "</div>"."\n";
		
		return $html;
	}
}


?>
