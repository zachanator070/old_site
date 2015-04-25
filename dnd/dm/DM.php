<?php
	
	include '../database/DatabaseAccess.php';
	
	class DM{
	
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
	
		function printPictures(){
			
			$names="";
			$db = new DatabaseAccess();
			
			$allNames = $db->getAllCharacterNames();
			
			foreach($allNames as $name){
				
				$names.="<option value='".$name."'>".$name."</option>";
						
			}
			
			$html= "<form enctype='multipart/form-data' method='post' action='SharePicture.php'>";
			
			$html.=<<<"HTML"
			
				<h1>Share Picture</h1>
				<select name = "characterName">
					$names
				</select>
				<br/>
				
			
HTML;
		
			$html.= "Upload file:<input type='file' name='pictureToUpload' id='pictureToUpload' /><br/>"."\n";
			$html.= "File from URL:<input type='text' name='pictureFromURL' size='10'/><br/>"."\n";
			
			$pictures = scandir('../characters/DM/',1);
			
			$size =count($pictures)-2;
			
				//foreach picture, display it
			
			for($x=0;$x<$size;$x++){
				$dim = getimagesize('../characters/DM/'.$pictures[$x]);
				$newwidth=$this->resize($dim[0],$dim[1])[0];
				$newheight=$this->resize($dim[0],$dim[1])[1];
				
				$html.= "<img class='dndpic' src='../characters/DM/".$pictures[$x]."' width = '".$newwidth."' height = '".$newheight."' id ='img".$pictures[$x]."' onclick='mark(this.id)'/>"."\n";
				$html.= "<input type='hidden' id='share".$pictures[$x]."' name ='share[]' value='false'/>"."\n";
				$html.= "<input type='hidden' id='delete".$pictures[$x]."' name ='delete[]' value='false'/>"."\n";
				$html.= "<input type='hidden' name ='picturename[]' value='".$pictures[$x]."'/>"."\n";
				
			}
			
			$html.="<br/><input type='submit' value='Share Picture'>";
			$html.= "\n</form>";
			
			return $html;
		}
		
		function printDocs(){
			
			$html = <<<"HTML"
			
				<h1>Docs</h1>
				
				<a href="docs">docs</a>
			
HTML;
			
			return $html;
		}
		
		function printDelete(){
			
			$names="";
			$db = new DatabaseAccess();
			
			$allNames = $db->getAllCharacterNames();
			
			foreach($allNames as $name){
				
				$names.="<option value='".$name."'>".$name."</option>";
						
			}
			
			
			$html =<<<"HTML"
			
				<form action="deletechar.php" method="post">
				<h1>Delete Character</h1>
					<select name = "name">
						$names
					</select>
					<br/>
					<input type="submit" value='Delete Character'>
					<br/>
				</form>
			
HTML;

			return $html;
			
		}
		
		function printPassword(){
			
			$names="";
			$db = new DatabaseAccess();
			
			$allNames = $db->getAllCharacterNames();
			
			foreach($allNames as $name){
				
				$names.="<option value='".$name."'>".$name."</option>";
						
			}
			
			$html = <<<"HTML"
			
				<form action="getpassword.php" method="post">
					<h1>Get Password</h1>
					<select name = "name">
						$names
					</select>
					<br/>
					<input type="submit" value='Get Password'>
					<br/>
				
				</form>
				
HTML;
			return $html;
		}
		
	}




?>
