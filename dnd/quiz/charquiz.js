	function checkgroup(buttonGroup){
		var status=false;
	
		console.log("length "+buttonGroup.length);
		for (var i = 0; i < buttonGroup.length; i++) {
			if (buttonGroup[i].checked) {
				console.log();
				status=true;
			}
			console.log(i+"is not checked");
		}
		return status;
		
	}
	
	function validate(){
		
		var pass=true;
		var last =1;
		
		var validate=true;
		
		while(validate){
			if(document.forms['charquiz']['one'].value==""){
				pass=false;
				break;
			}
			last++;
			
			if(!checkgroup(document.forms['charquiz']['two'])){
				pass=false;
				break;
			}
			last++;
			
			if(!checkgroup(document.forms['charquiz']['three'])){
				pass=false;
				break;
			}
			last++;
			
			if(!checkgroup(document.forms['charquiz']['four'])){
				pass=false;
				break;
			}
			last++;
			
			if(!checkgroup(document.forms['charquiz']['five'])){
				pass=false;
				break;
			}
			last++;
			
			if(!checkgroup(document.forms['charquiz']['six'])){
				pass=false;
				break;
			}
			last++;
			
			if(!checkgroup(document.forms['charquiz']['seven'])){
				pass=false;
				break;
			}
			last++;
			
			if(!checkgroup(document.forms['charquiz']['eight'])){
				pass=false;
				break;
			}
			
			validate=false;
		}
		
		
		if(pass){
			document.getElementById('charquiz').submit();
			
		}
		
		else{
			alert("Question #"+last+" is not answered");
		}
	}
