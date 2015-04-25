<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "blogstyle.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script src="../da_script.js" language="javascript" type="text/javascript"></script>
		
	</head>
	
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
				
				
		<div id="frame">	
			<div id = "scroll">
				<h1>Blog Home</h1>	
			</div>
				
			<div id ="anchors">
					
			</div>
				
			<div id="clock">
			
			</div>
				
			<div id = "content">
				 <div class="entry">
					 <h3>The Blog</h3>
					 
					 <img src="pics/pic5.jpg" height="300px" width="200px" align="left">
					 
					 <p>
						The blog. Why a blog? What could Zach possibly write that could be interesting? Why are those two so cute?
						Yes these are all very good questions. The main reason why I'm starting this is because I had a notion a while back that told me that I would one day want to remember what
						happens in my life. This feeling started when I went on a mission for The Church of Jesus Christ of Latter-day Saints. What you are mormon? Yep hope you got it by now.
						I had kept a journal very strictly while on my mission and when I came back home this idea came back to me that made me want to record what happens to me. Only this 
						time I wanted to share things a little more liberally instead of in a notebook I kept to my self.
					 </p>
					 
					 <p>
						While at BYU I've been able to take some great religion classes (yes it's a thing and yes it's required for all students) and this semester I have the opportunity 
						to take a marriage and family prep class. Crazy right? A class that teaches you to get married, exactly what I need. In the class we have talked about what attributes we think are necessary and essential that we would want in our spouses.
						So in part of our first assignment we were to write what we thought these essentials are. Our second assignment is to take that list and develop one attribute on it.
						As part of my project I wanted to become a more humble person, meaning more teachable. To do this I am taking a principle that was taught in class or at church that week and
						directly applying it. In light of my recent engagement I thought it would be only fair to include my fiance, Alyssum Teh, and hopefully get some feedback from her on my attribute development.
					</p>
					
					<p>
						TLDR: I'm developing a attribute to help become a better person and future husband and wanted to know what others think about this as well. I don't have a ton of experience being 
						married (none actually) and wanted some feed back.
					</p>
				 </div>
				
			</div>
			
			<div id = "nav">
				<a href="../index.php" class="navlink">
				<div id="navmid">
					Home
				</div>
				</a>
				
				<a href="index.php" class="navlink">
				<div id="navmid">
					Blog
				</div>
				</a>
				
				<a href="../quotes.php" class="navlink">
				<div id="navmid">
					Quotes
				</div>
				</a>
				
				<a href="../lols.php" class="navlink">
				<div id="navmid">
					Lols
				</div>
				</a>
			</div>
			
			<div id="entries">
					<h3 class="entryTitle">Entries</h3>
					<ul>
						<?php
						include "entries.php";
						
						?>
					</ul>
			</div>
			
		</div>
	</body>
</html>
