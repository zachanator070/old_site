	
	
	//add and delete rows for attack table
	function deleteAttack(x){
		
		var y = document.getElementById(x).rowIndex;
		document.getElementById("attacktable").deleteRow(y);
		
	}
	
	function addAttack(){
		
		var y = document.getElementById("attacktable");
		
		var size =y.rows.length;
		
		var row = y.insertRow(size);
		row.id="row"+size;
		var cell0 = row.insertCell(0);
		var cell1 = row.insertCell(1);
		var cell2 = row.insertCell(2);
		var cell3 = row.insertCell(3);
		var cell4 = row.insertCell(4);

		cell0.innerHTML = "<input type='text' class='medcell' name='attack_name[]' value='"+row.id+"'>";
		cell1.innerHTML = "<input type='text' class='medcell' name='damage[]' value='Attack Damage'>";
		cell2.innerHTML = "<input type='text' class='medcell' name='critical[]' value='Critical Damage'>";
		cell3.innerHTML = "<input type='text' class='lasrgecell' name='description[]' value='Description'>";
		cell4.innerHTML = "<button type='button' onclick='deleteAttack(\"row"+size+"\")' >delete</button>";
			
	}
	
	//add and delete rows for feats table
	function deleteFeat(x){
		
		var y = document.getElementById(x).rowIndex;
		document.getElementById("feattable").deleteRow(y);
		
	}
	
	function addFeat(){
		
		var y = document.getElementById("feattable");
		
		var size =y.rows.length;
		
		var row = y.insertRow(size);
		row.id="row"+size;
		var cell0 = row.insertCell(0);
		var cell1 = row.insertCell(1);
		var cell2 = row.insertCell(2);

		cell0.innerHTML = "<input type='text' class='medcell' name='feat_name[]' value='"+row.id+"'>";
		cell1.innerHTML = "<textarea rows='4' class='largecell' cols ='35' name='feat_description[]'>Description</textarea>";
		cell2.innerHTML = "<button type='button' onclick='deleteFeat(\"row"+size+"\")'>delete</button>";
			
	}
	
	
	//marks pictures for deletion
	function mark(picid){
		
		var name = picid.substr(3,picid.length-1);
		var input =document.getElementById("input"+name);
		var pic = document.getElementById("img"+name);
		
		if(input.value=="false"){
				input.value="true";
				pic.style.padding="20";
				pic.style.border="thick solid #FF0000";
		}
		
		else{
			input.value="false";
			pic.style.border="none";
		}
		
	}
	
	function isInt(value) {
			return parseInt(value) == value;
		}
	
	//verifies sheetfields based on index
	function checksheet(){
		
		var form = document.getElementById('charsheet');
		
		var inputs = document.getElementsByTagName('input');
		
		var pass =true;
		var last=0;
		
		if(pass&&!isInt(inputs[5].value)){
				pass=false;
				alert("In field "+inputs[5].name+": "+inputs[5].value+" is not a integer");
		}
		
		if(pass&&!isInt(inputs[7].value)){
				pass=false;
				alert("In field "+inputs[7].name+": "+inputs[7].value+" is not a integer");
		}
		
		if(pass){
			for(var x=9;x<=20;x++){
				
				if(pass&&!isInt(inputs[x].value)){
						pass=false;
						alert("In field "+inputs[x].name+": "+inputs[x].value+" is not a integer");
				}				
				
			}
		}
		
		if(pass){
			for(var x=22;x<=26;x++){
				
				if(pass&&!isInt(inputs[x].value)){
						pass=false;
						alert("In field "+inputs[x].name+": "+inputs[x].value+" is not a integer");
				}				
				
			}
		}

				
		
		if(pass){
			for(var x=28;x<36;x++){
				
				if(pass&&!isInt(inputs[x].value)){
						pass=false;
						alert("In field "+inputs[x].name+": "+inputs[x].value+" is not a integer");
				}				
				
			}
		}
		
		if(pass){
			
			for(var x=38;x<180;x+=3){
				
				if(pass&&!isInt(inputs[x].value)){
						pass=false;
						alert("In field "+inputs[x].name+": "+inputs[x].value+" is not a integer");
				}				
				
				x++;
				
				if(pass&&!isInt(inputs[x].value)){
						pass=false;
						alert("In field "+inputs[x].name+": "+inputs[x].value+" is not a integer");
				}
				
			}
			
		}
		
		
		if(pass&&!isInt(document.getElementById('goldval').value)){
				pass=false;
				alert("In field "+inputs[180].name+": "+inputs[180].value+" is not a integer");
		}
		
		
		if(pass){
			pass=checkpictures();
		}
		
		if(pass){
				
			form.submit();
			
		}
		
	}
	
	//verifies pictures
	function checkpictures(){
			
			var file = document.getElementById("file");
			var form = document.getElementById("charsheet");
			
			if(file.files[0]&&file.files[0].size/1024/1024>2){
				
				alert("Picture size too large");
				return false;
			}
			
			else{
				return true;
			}
			
		}
		
	function hide(element){
		
		if(element.style.visibility =="visible"){
			
			element.style.visibility ="hidden";
			element.style.position="absolute";
		}
		
		else{
			element.style.visibility ="visible";
			element.style.position="relative";
		}
		
		
	}
	
	function goToLevelUp(){
		document.getElementById('levelform').submit();
	}
