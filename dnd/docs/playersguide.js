	
			function showcontents(){
				//alert(screen.width +" "+document.getElementById("contents").style.visibility);
				if(screen.width<650&&document.getElementById("contents").style.visibility=="visible"){
					document.getElementById("contents").style.visibility = "hidden";
					document.getElementById("arrows").src="../build/arrows.png";
					//alert("show");
				}
				
				else if(screen.width<650){
					document.getElementById("contents").style.visibility = "visible";
					document.getElementById("arrows").src="../build/arrows_back.png";
					//alert("hide");
				}
			}
