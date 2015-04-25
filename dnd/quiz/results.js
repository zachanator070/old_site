function find_mod(x){
			
	var mod = -5;
	var val =1;
	while(x>val){
		val =val +2;
		mod++;
		
	}
		
	return mod;
}

function isInt(value) {
	return parseInt(value) == value;
}

function checkcreate(){
	
	//alert(isInt('1'));
	
	var form = document.getElementById('createform');
	
	var inputs = document.getElementsByTagName('input');
	
	var pass =true;
	var last=0;
	var error;
	
	for(var x=0;x<6;x++){
		
		if(!isInt(inputs[x+1].value)){
			pass=false;
			last = x;
			break;
		}
	}
	
	error= inputs[last+1].value+" is not a valid input"
	
	if(inputs[0].value==""){
		
		last=-1;
		error="Cannot have an empty name";
		pass=false;
	}
	
	//console.log(inputs[0].value+" :"+names.indexOf(inputs[0]));
	
	if(names.indexOf(inputs[0].value)>=0){
		pass=false;
		error="Name already exists";
	}
	
	if(document.getElementById('password').value!=document.getElementById('testpassword').value){
		pass=false;
		error="Passwords do not match";
	}
	
	if(pass){
		//alert("Submitting form");
		form.submit();
		
	}
	
	else{
		alert(error);
		
	}
}


function randomgen(){
	
	var inputs = document.getElementsByTagName('input');
	var mods = document.getElementsByTagName('span');
	var scores=[];
	var total=0;
	
	for(var x =0;x<6;x++){
		
		var numbers = [];
		
		numbers[0] = Math.floor((Math.random() * 6) + 1); 
		numbers[1] = Math.floor((Math.random() * 6) + 1); 
		numbers[2] = Math.floor((Math.random() * 6) + 1); 
		numbers[3] = Math.floor((Math.random() * 6) + 1); 
		numbers[4] = Math.floor((Math.random() * 6) + 1); 
		
		numbers.sort();
		numbers.reverse();
		
		scores[x]=numbers[0]+numbers[1]+numbers[2];
		
		total+=find_mod(scores[x]);
		
	}
	
	//if mod total<5 reroll
	if(total<=4||total>=6){
		
		randomgen();
		
	}

	//set values
	else{
		
		for(var y=0;y<6;y++){
			inputs[y+1].value=scores[y];
		}
		
		updatemods();
		
	}
	
}


function updatemods(){
	
	var inputs = document.getElementsByTagName('input');
	var mods = document.getElementsByTagName('span');
	
	var race_in = new Array("race_str_in","race_dex_in","race_con_in","race_int_in","race_wis_in","race_cha_in");
	
	for(var y=0;y<6;y++){
		
			var race_bonus = document.getElementById(race_in[y]).value;
			var mod=find_mod(parseInt(inputs[y+1].value)+parseInt(race_bonus));
			
			if(mod>0){
				mod="+"+mod;
			}
			
			mods[y+1].innerHTML=mod;
		}
	
}


function setattributes(attr){
	
	var str =document.getElementById("strength");
	var dex =document.getElementById("dexterity");
	var con =document.getElementById("constitution");
	var intel =document.getElementById("intelligence");
	var wis =document.getElementById("wisdom");
	var cha =document.getElementById("charisma");
	
	str.value = attr[0];
	dex.value = attr[1];
	con.value = attr[2];
	intel.value = attr[3];
	wis.value = attr[4];
	cha.value = attr[5];
	
	
}


function applyrace(){
	
	var race =document.getElementById("race").value;
	
	var attr = new Array();
	
	//alert(race);
	
	if(race=="Average Joe"){
		attr = new Array(0,0,0,0,0,0);
	}
	
	if(race=="Android"){
		attr = new Array(1,1,-1,0,0,0);
	}
	
	if(race=="Ghoul"){
		attr = new Array(0,1,0,0,1,-1);
	}
	
	if(race=="Mutant"){
		attr = new Array(0,0,0,1,0,0);
	}
	
	var str_div =document.getElementById("race_str_div");
	var str_in = document.getElementById("race_str_in");
	
	var dex_div =document.getElementById("race_dex_div");
	var dex_in = document.getElementById("race_dex_in");
	
	var con_div =document.getElementById("race_con_div");
	var con_in = document.getElementById("race_con_in");
	
	var int_div =document.getElementById("race_int_div");
	var int_in = document.getElementById("race_int_in");
	
	var wis_div =document.getElementById("race_wis_div");
	var wis_in = document.getElementById("race_wis_in");
	
	var cha_div =document.getElementById("race_cha_div");
	var cha_in = document.getElementById("race_cha_in");
	
	str_div.innerHTML = attr[0];
	str_in.value = attr[0];
	
	dex_div.innerHTML = attr[1];
	dex_in.value = attr[1];
	
	con_div.innerHTML = attr[2];
	con_in.value = attr[2];

	int_div.innerHTML = attr[3];
	int_in.value = attr[3];
	
	wis_div.innerHTML = attr[4];
	wis_in.value = attr[4];
	
	cha_div.innerHTML = attr[5];
	cha_in.value = attr[5];
	
	updatemods();
	
	//update race advantages
	
	var advantage="";
	
	//alert(race);
	
	if(race=="Average Joe"){
		advantage ="+1 extra starting feat, +4 extra starting skill points";
	}
	
	if(race=="Android"){
		advantage ="Starts with 1 body augmentation and has future potential for more";
	}
	
	if(race=="Ghoul"){
		advantage = "Start with Terrifying Presence feat, +5 radiation resistance";
	}
	
	if(race=="Mutant"){
		advantage = "Have 1 helpful abnormality and 1 hinderant abnormality, -3 radiation resistance";
	}
	
	document.getElementById("raceadvantage").innerHTML=advantage;
	
}
