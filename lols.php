<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Orbitron"></link>
		
		<script src="da_script.js" language="javascript" type="text/javascript"></script>
		
		<script language ="javascript">
		
		function showMinecraft(){
			document.getElementById("minecraft_on").style.visibility="visible";

		}
		
		function hideMinecraft(){
			document.getElementById("minecraft_on").style.visibility="hidden";

		}
		
		function showdnd(){
			document.getElementById("dnd_on").style.visibility="visible";

		}
		
		function hidednd(){
			document.getElementById("dnd_on").style.visibility="hidden";

		}
		
		</script>
		
	</head>
	
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
				
				
		<div id="frame">	
			<div id = "scroll">
				<marquee>Welcome to theZachCave
				</br>
					<script language = "javascript">
						 for(var i =0;i<114;i++){
							document.write("&nbsp;");
						 }
						 document.write("Welcome to theZachCave");
						document.write("</br>");
						
						for(var a =0;a<2;a++){
							for(var i =0;i<114;i++){
								document.write("&nbsp;");
							}
						}
						document.write("Welcome to theZachCave");
						document.write("</br>");
						for(var a =0;a<3;a++){
							for(var i =0;i<114;i++){
								document.write("&nbsp;");
							}
						}
						document.write("Welcome to theZachCave");
					</script>
				</marquee>
			</div>
				
			<div id ="anchors">
					
			</div>
				
			<div id="clock">
			&nbsp;
			</div>
				
			<div id = "content" class = "lols">
				 <h1 id = "top">Lols</h1>
					   <p>Welcome to the lols page. It is here that I will post some the particular nerdy endeavors that I persue simply "for the lols."</p>
					   <br/>
					   <br/>
					   <a href="minecraft.html" class="minecraft" ><img id="minecraft" src ="build/minecraft.png" onmouseover="showMinecraft();"  /><div id="minecraft_on" onmouseout="hideMinecraft();"><p class = "minecraft">Well it is finally here. Click here to download the zachpack and join the server.</p></div></a>
					   <br/>
					   <br/>
					   <a href="dnd/index.php" class="dnd" ><img id="dnd" src ="build/dnd.png" onmouseover="showdnd();"  /><div id="dnd_on" onmouseout="hidednd();"><p class = "dnd">Here is the online interactive character sheet that will store everything online. RTD my friends.</p></div></a>
					   
				
			</div>
			
			<div id = "nav">
				<a href="index.php"><img border="0"src = "build/home.png" onmouseover = "this.src='build/home_on.png'" onmouseout = "this.src='build/home.png'" class="navimg"/></a>
				<a href="blog/index.php"><img border="0"src = "build/blog.png" onmouseover = "this.src='build/blog_on.png'" onmouseout = "this.src='build/blog.png'" class="navimg"/></a>
				<a href="quotes.php"><img border="0"src = "build/quotes.png" onmouseover = "this.src='build/quotes_on.png'" onmouseout = "this.src='build/quotes.png'" class="navimg"/></a>
				<a href="lols.php"><img border="0"src = "build/lols.png" onmouseover = "this.src='build/lols_on.png'" onmouseout = "this.src='build/lols.png'" class="navimg"/></a>
			</div>
		</div>
	</body>
</html>
