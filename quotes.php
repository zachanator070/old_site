<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		
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
				 				
				<form name = "more" action = "quotes.php" method = "post">
					<input type = "hidden" value ="true" name = "val" id = "secret"></input>
					<h1 class = "a1" onclick ="yes()">Quotes - 2014</h1>
				</form>	
				
					<ul>
					
					<?php
					function more(){
							$yes = $_POST['val'];
	
							if($yes=="true"){
							
							

							echo "</br><li>You know what happens when a drunk guy comes into my house and tries to rape me? He gets a barrel down his throat...wait not that barrel!!! </br>- Parker</li>";
							echo "</br><li>-Josh Jaramillo: started it yet?</br>-Breyton: started what? </br>-Josh Jaramillo: the plan haha </br>-Breyton: oh no haha, it commences when i leave the workplace at 1900 </br>-Josh Jaramillo: lol </br>-Breyton: mormon omicron advances to the home base to retrieve the package,then authorizes full stealth measures to infiltrate the target's home.from there plant the 'seed of love' and bring the rain</li>";
							echo "</br><li>OH MY GAWSH THAT GIRL IS USELESS FOR EVERYTHING I SWEAR! NO DATES, NO INFO, NO FUN!</li>";
							echo "</br><li>He had xray vision and he was looking through your clothes, dont worry though, he was looking at your bone structure. He said it looked gooood. </br>-Parker's comments on Breyton's dream</li>";
							
							echo "</br><li>Breyton! put the seat up! .....dude, im a freaking sniper </br>- Breyton</li>";
							echo "</br><li>This program has more loops than a rollercoaster on lsd </br>-Breyton</li>";
							echo "</br><li>ncmo? WHOOPS WRONG PERSON </br>- Breyton's chat to me in Facebook</li>";
							echo "</br><li>PLAN A: if they are hot then we hit on them PLAN B: go straight into docterine </br>-Breyton</li>";
							
							echo "</br><li>Brey- Guess  what I just finished?? </br>Mckay- A collage of naked pictures of me? </br>Me-I would pay for that </br>Mckay-So would 70 million other Americans, lets start a buisiness </li>";
							
							echo "</br><li>I would never put a woman behind me, if you know what i mean :) </br>-Mckay</li>";
							
							echo "</br><li>You know what would be bad? Having diarrea and vomitting at the same time </br>-Michael</li>";
							echo "</br><li>I HATE YOU!!!! YOU ARE ARE USING MY CUP!! </br>-Breyton yelling at me while I use his cup to empty the sink of dirty dish water</li>";
							echo "</br><li>MMMMMMM CHEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEESE</br>- Parker</li>";
							echo "</br><li>We DIGIDIGDIGDIGDIGDIGDIGDIGDIGDIGDIGDIGDIGDIGDIGDIGDIG and mine the day through!!</br>-Minecraft miners</li>";
							
							}
						}
					
					?>
					

						<!--<li>Parker: Hey I baptized my brother this last week. Zach: Oh my gosh is he 12 already?? (he was 8 years old)</li>
						<li>Zach: Hey Brey did you taker her in your car? Brey: Yeah I warmed her buns with my seat warmers</li>-->
					
					</ul>
 
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
