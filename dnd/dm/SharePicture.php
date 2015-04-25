<?php

	class SharePicture{

		function share(){
			
			$host = "thezachcave.com";
			$dbuser = "dnd";
			$dbpassword = "datadog";
			$db = "dnd";
			
			$con = mysqli_connect($host,$dbuser,$dbpassword,$db);
		
			move_uploaded_file($_FILES['pictureToUpload']['tmp_name'],"../characters/DM/". mysqli_real_escape_string($con,$_FILES['pictureToUpload']['name']));
			
			if($_POST['pictureFromURL']!=""){
				$picname = basename($_POST['pictureFromURL']);
				$url = $_POST['pictureFromURL'];
				file_put_contents($picname, file_get_contents($url));
			}
			
			foreach($_POST['share'] as $key=>$value){
				
				if($value=='true'){
				
					$picname=mysqli_real_escape_string($con,$_POST['picturename'][$key]);
					
					//error_log("copy from :".'../characters/DM/'.$picname);
					//error_log("copy to :".'../characters/'.$_POST['characterName'].'/'.$picname);
					
					copy('../characters/DM/'.$picname,'../characters/'.$_POST['characterName'].'/'.$picname);
				}
			}
			
			foreach($_POST['delete'] as $key=>$value){
					
					if($value=='true'){
					
					$picname=mysqli_real_escape_string($con,$_POST['picturename'][$key]);
					
					unlink('../characters/DM/'.$picname);
					}
				}
			
		}
	
	}
	
	$share = new SharePicture();
	$share->share();
	
	header("Location: index.php");
	
?>
