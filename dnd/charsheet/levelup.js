function healthQuestion(){
		document.getElementById('gratsPanel').style.visibility="hidden";
		document.getElementById('gratsPanel').style.position="absolute";
		document.getElementById('healthPanel').style.visibility="visible";
		document.getElementById('healthPanel').style.position="relative";
		
	}

	function skillQuestion(){
		document.getElementById('healthPanel').style.visibility="hidden";
		document.getElementById('healthPanel').style.position="absolute";
		document.getElementById('skillPanel').style.visibility="visible";
		document.getElementById('skillPanel').style.position="relative";
	}
	
	function featQuestion(){
		document.getElementById('skillPanel').style.visibility="hidden";
		document.getElementById('skillPanel').style.position="absolute";
		var level = document.getElementById('level').value;
		
		if(level%3==0){
			document.getElementById('featPanel').style.visibility="visible";
			document.getElementById('featPanel').style.position="relative";
		}
		
		else if(level%4==0){
			document.getElementById('abilityPanel').style.visibility="visible";
			document.getElementById('abilityPanel').style.position="relative";
			
		}
		
		else{
			
			document.getElementById('finishedPanel').style.visibility="visible";
			document.getElementById('finishedPanel').style.position="relative";
		}
	}
	
	function abilityQuestion(){
		
		document.getElementById('newFeat').value = "true";
		document.getElementById('featPanel').style.visibility="hidden";
		document.getElementById('featPanel').style.position="absolute";
		
		if(level%4==0){
			document.getElementById('abilityPanel').style.visibility="visible";
			document.getElementById('abilityPanel').style.position="relative";
		}
		
		else{
			
			document.getElementById('finishedPanel').style.visibility="visible";
			document.getElementById('finishedPanel').style.position="relative";
		}
	}
	
	function finishQuestion(){
		document.getElementById('abilityPanel').style.visibility="hidden";
		document.getElementById('abilityPanel').style.position="absolute";
		document.getElementById('finishedPanel').style.visibility="visible";
		document.getElementById('finishedPanel').style.position="relative";
	}
