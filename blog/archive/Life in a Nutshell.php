<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "../style.css">
		<script src="../da_script.js" language="javascript" type="text/javascript"></script>
		
	</head>
	
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
		<div id ="middle">
		
			
			
			<div>
				<div class ="title">
				&nbsp;
				</div>
				
				<div id = "scroll">
				<marquee>Welcome to theZachanator.com!
				</br>
				<script language = "javascript">
				 for(var i =0;i<114;i++){
					document.write("&nbsp;");
				 }
				 document.write("Welcome to theZachanator.com!");
				document.write("</br>");
				
				for(var a =0;a<2;a++){
					for(var i =0;i<114;i++){
						document.write("&nbsp;");
					}
				}
				document.write("Welcome to theZachanator.com!");
				document.write("</br>");
				for(var a =0;a<3;a++){
					for(var i =0;i<114;i++){
						document.write("&nbsp;");
					}
				}
				document.write("Welcome to theZachanator.com!");
				</script>
				</marquee>
					
				</div>
				
				<div class ="t">
					<a class="a1" href = "index.php">Blog Home</a>  |  <a class="a1" href = "n2o.php">Archive</a>
				</div>
				
<div class = "content">
					   <h1>The Story So Far...</h1>
					   2/16/2011
					   </br>
					   </br>
					   I was browsing on facebook not quite long ago and saw that there was a lot 
					   of pictures on there that I should save. So I compiled them all and made
					   this scrapbook like page. So in case you missed the past 19 years of my life take
					   a look and see what I've been up to.
					   </br>
					   </br>
					   Click on the picture or the arrows for the next one .
					   </br>
					   </br>
					   <center>
					   <form name = "pics">
							<img class = "arrow"src = "../life/leftarrow.png" onclick="prev()">  <input type ="text" value = "1" id = "val" size = "1"/> of 147  <img src = "../life/rightarrow.png"onclick="next()" class = "arrow"/>
							</br>
							<input type ="button" onclick= "go()" value= "Go"/>
					   </form>
					   </br>
						<img src ="../life/goodlookin.jpg" onclick ='next()' id ="pic"/></center>
						
					   
					   
</div>
			</div>
			
			<div id = "player">
				
			</div>
			
			<div id = "frame">
				<div id="clock">
				&nbsp;
				</div>
			</div>
			
			<div class = "r">
				<a href="../index.php"><img border="0"src = "../build/home.png" onmouseover = "this.src='../build/home_on.png'" onmouseout = "this.src='../build/home.png'"/></a>
				<a href="index.php"><img border="0"src = "../build/blog.png" onmouseover = "this.src='../build/blog_on.png'" onmouseout = "this.src='../build/blog.png'"/></a>
				<a href="../quotes.php"><img border="0"src = "../build/quotes.png" onmouseover = "this.src='../build/quotes_on.png'" onmouseout = "this.src='../build/quotes.png'"/></a>
				<a href="../lols.php"><img border="0"src = "../build/lols.png" onmouseover = "this.src='../build/lols_on.png'" onmouseout = "this.src='../build/lols.png'"/></a>
			</div>
			
		
		</div>
		
		
		
	</body>
</html>