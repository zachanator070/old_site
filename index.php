<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
		<script src="da_script.js" language="javascript" type="text/javascript"></script>
		
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
				
			<div id = "content">
				<center>
					<h1>Welcome. Go ahead and <a onclick ="alert('Haha a pun!');">click</a> around.</h1>
					<img  src = "me.jpg" align = "center"/>
					</br>
					</br>
					Hey so this is the place. Currently working on all of this so expect errors :/
					</br></br>
					If you are interested in playing minecraft on the zachpack server click <a href="minecraft.html">here</a> for mod files and instructions.
					
					</br>
				</center>
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
