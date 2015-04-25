function mark(picid){
		
		var name = picid.substr(3,picid.length-1);
		var share =document.getElementById("share"+name);
		var deleted = document.getElementById('delete'+name);
		var pic = document.getElementById("img"+name);
		
		if(share.value=="false"&&deleted.value=="false"){
				share.value="true";
				pic.style.padding="20";
				pic.style.border="thick solid #0000FF";
		}
		
		else if(share.value=="true"){
			share.value="false";
			deleted.value="true";
			pic.style.padding="20";
			pic.style.border="thick solid #FF0000";
		}
		
		else if(deleted.value=="true"){
			deleted.value="false";
			pic.style.border="none";
		}
	}
