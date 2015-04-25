var skills = ["Appraise","Balance","Bluff","Climb","Cooking","Craft","Decking","Diplomacy","Disable Device","Disguise","Electronics","Escape Artist","Explosives","Forgery","Gather Information","Handle Animal","Heal","Heavy Weapons","Hide","Intimidate","Jump","Knowledge","Listen","Medicine","Melee Weapons","Move Silently","Open Lock","Pistols","Profession","Rifles","Science","Sense Motive","Sleight of Hand","Spot","Survival","Swim"];
			
			function updateremainder(){
			
				var startingskills = parseInt(document.getElementById("startingskills").value);
				var remaindertotal=0;
				
				for(x in skills){
					
					var input=0;
					if(!isNaN(parseInt(document.getElementById(skills[x]+"rank").value))){
						 input =parseInt(document.getElementById(skills[x]+"rank").value);
					}
					
					remaindertotal=remaindertotal+input;
					
				}
				
				document.getElementById("remaining").innerHTML=startingskills-remaindertotal;
			
			}
			
			
			function updaterank(skillname){
				
				var abilitybonus = parseInt(document.getElementById(skillname+"bonus").value); 
				var skillrank=0;
				
				var input = parseInt(document.getElementById(skillname+"rank").value);
				if(!isNaN(input)){
						skillrank = input;
				}
				
				var skilltotal = document.getElementById(skillname+"total"); 
			
				skilltotal.innerHTML=(abilitybonus)+skillrank;
			
				updateremainder();
			}
		
			function clearranks(){
			
				for(x in skills){
					var abilityrank = document.getElementById(x+"rank"); 
					abilityrank.value='0';
				}
				
				updateremainder();
			}
			
			function isInt(value) {
				return !isNaN(parseInt(value));
			}
			
			function checkcreate(){
				
				var form = document.getElementById('createform');
				
				var pass =true;
				var errorMsg = "";
				
				for(x in skills){
					
					var value = document.getElementById(skills[x]+"rank").value;
					//console.log(value);
					
					if(isNaN(parseInt(value))){
						 pass=false;
						 errorMsg = "In field "+skills[x]+" : "+value+" is not a valid input";
						 break;
					}
					
					var skillBox = document.getElementById(skills[x]+'box');
					
					if(skillBox.checked == true&&value>4){
						pass=false;
						errorMsg = "In field "+skills[x]+" : "+value+" is greater than 4";
						break;
					
					}
					
					else if(skillBox.checked == false&&value>2){
						pass=false;
						errorMsg = "In field "+skills[x]+" : "+value+" is greater than 2";
						break;
					}
					
				}
				
				if(pass){
					//alert("Submitting form");
					form.submit();
					
				}
				
				else{
					
					alert(errorMsg);
					
				}
			}
