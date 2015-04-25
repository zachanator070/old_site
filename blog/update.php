<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "blogstyle.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script src="../da_script.js" language="javascript" type="text/javascript"></script>
		
	</head>
	
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
				
				
		<div id="frame">	
			<div id = "scroll">
				<h1>Life Update</h1>	
			</div>
				
			<div id ="anchors">
					
			</div>
				
			<div id="clock">
			
			</div>
				
			<div id = "content">
				 <div class="entry">
					 <h3>7 Feb 2015</h3>
					 <p>
						Well howdy everyone! It has been a while, yes  a long long while. So in case you missed it I uh sorta kinda got married.
						Yeah so now that I'm done getting married and I can finally be married. I can sucessfully report that I have more
						kitchenware than I could have possibly imagined and just enough furniture so that I'm not sleeping on the ground.
						Oh the joys of weddings. 
					 </p>
					 
					 <p>
						So a lot has happened in the last month and some (I'm sure not many) of you have noticed that my beloved server
						that this site was running on somehow had a critical hardware failure and the motherboard stopped reacting to anything
						that we plugged into it. Much credit goes here to my little sister Emma who is not a day past the age of 13 and was able to assist 
						in most of the recovery attempts. Seriously props to Emma. I don't think half the kids her age know what a hard drive looks like
						or how to plug one in. Actually I wouldn't be suprised if half the people my age suffer from the same problem. So yeah. Props Emma
						you rock at tech support.
					 </p>
					 
					 <p>
						So now this site is running off a raspberry pi. Which is a computer the size of a credit card. It's pretty sweet and I'm sure my
						dad would have rather seen me get a BeagleBone but Raspberry Pi's are only like $30. Sorry pops. Maybe in another life. 
					 </p>
					 
					 <p>
						 So in other news I am taking another religion class this semester and it is being taught by the beloved Mark Ogletree from Mckinney Texas!! WOOP WOOP!!
						 So yeah naturally I am pretty happy to go to his class two days a week to learn about the modern prophets and general authorities. It was kind of funny that the
						 first day of class, before saying anything else, not even "hello" or "welcome this is REL 333 The Living Prophets," he instead says "Zach Johnson how is Mckinney these days?"
						 Hahaha that took me off guard a little but we had a small convorsation while the rest of the class was there listening becuase class had started. Day 1 suspisions confirmed,
						 I will like this class.
					 </p>
					 
					 <p>
						So brother Ogletree had asked us to think of another long term project to work on for the bulk of the semester. Sound familiar? So thinking on
						subjects that I could blog about I thought back to a book that my dad had given me last semester that I had meant to read. The book is 
						called "Escape from Van Diemen's Land." I think it's written by my dad's cousin? The author, Elizabeth Gammell Hedquist, mentions her aunt 
						Nacey Johnson (my grandma's name), but I think I need to confirm with some relatives on that though. 
					 </p>
					 
					 <img src="pics/justmaried.jpg" height="600" width="400" align="left"/>
					 
					 <p>
						So a little background on the book is that it is about an ancestor of mine by the name of James Gammell who was pretty much the rudest dude that was
						on the face of the planet during the 19th century. Why do I think this? Van Diemen's land was the name of an island off the coast of Australia
						known today as Tasmania and known back then as a British prison. So I put the pieces together and figured at least James Gammell would
						escape from a prison fortress in the middle of the ocean and live to tell the tale. I haven't even opened it yet and I know that much already I guess. 
						My dad say's he was a part of some other crazy events in history but I don't want to spoil it for the rest of you. :}
					 </p>
					 
					 <p>
						Anyway that's all I really gathered from the preface of the book and the short into that Hedquist gives in the start of the book and I'm pretty excited 
						to learn a little bit more about my family. You see in the LDS church there is a huge connection that we have to our ancestors as we believe in the concept of 
						eternal families. I figured this assignment and this small slice of history would help me take the advice of the prophet Malachi and "turn the heart of the fathers to the children, and the heart of the children to their fathers."
						In my interpretation for this asigment it means to learn who your family is so that you can appreciate them more and they will
						appreciate you more. Of course there is more to this but that is a different discussion.
					 </p>
					 
					 <p>
						For each entry for this semester I will try to read more and tell you all about it. Thanks everyone for reading! If anything keep reading in hopes that I
						will post some wedding pictures!! :) Have a great week everyone.
					 </p>
					 
					 <p>
						UPDATE: I just got the wedding pictures. Here is a good one.
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
