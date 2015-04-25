
<?php

	include 'DocTemplate.php';

	class StorySoFar{
		
		function getContent(){
			$content = <<<"CONTENT"
				<h1 id="top">Our Story This Far</h1>
					<p>
						[Aug 23, 115 PAR]
						<br/><br/>
						We awoke from our statis in a dark lab. Barely holding onto life we gathered together our combined knowledge and had assumed that 
						we were in that dank room due to a military mission whose purpose to us was unknown.
						<br/><br/>
						Exploring the lab we found Doc Barry who had been trapped in the lab for years. The radiation and test of time had
						made Barry's flesh and hair age tremediously to a point where it was rotting off of him. Later we learned this condition was
						quite common to a people called Ghouls.
						<br/><br/>
						With the guidence of Barry, we were able to restore power to the facility and exit out the main elevator shaft only after
						killing what to us was the creation of science itself, a abomination that was stiched together with flesh and metal.
						<br/><br/><br/>
						[Sept 15, 115 PAR]
						<br/><br/>
						Barry led us to Sam's pub where we were pointed to the west to Newkirk where we were told we could find work. 
						The sherrif there was rather excentric and was obviously on something but regardless his advice was the only 
						thing that we had to make a living for ourselves.
						<br/><br/><br/>
						[Sept 24, 115 PAR]
						<br/><br/>
						After being hired to clear out a den of wyrms and nearly loosing thier lives, our party has found it self in the
						middle of a war. We were hired by the "mayor" to clear out his sewer from these beasts and almost died as a result. 
						If that wasn't enough we found ourselves betrayed by the mayor in a junk yard trying to collect our well deserved bounty.
						We were saved by the most unlikely of charitable sources but regardless we were taken away from an ambush into the lair of the 
						dangerous gang of pit bosses known as the sharks.
						<br/><br/><br/>
						[Oct 8, 115 PAR]
						<br/><br/>
						We are finally away from the sharks even on a more perilous journey. The sharks have explained to us a granuer picture of this
						island that we have found ourselves on. "The City of Dreams" as so it is called, is under threat from these mysterious giants of the 
						apocalypse known as titians. For some reason the titains have targeted any attempt at civilization outside of the main city boundaries.
						Those who are in the city must stay in the city for fear of expaning out to the rest of the island and become destroyed by
						these monsters from the void. 
						<br/><br/>
						Having figured this out the sharks are determined to find the "sonic emitter" which is supposidly 
						what keeps the titians at bay from the city. We were explained that the mayor of Newkirk had claimed that such a device was under his protection.
						Aparently that device's holding chamber was in the sewer that we had stumbled upon. The secret is out. The emitter is gone and 
						we were the ones that let the cat out of the bag. The sharks have placed a high bounty on finding the emmiter and it sounds
						like a quick and easy way to fame and fourtune in the waste.
						<br/><br/><br/>
						[Oct 20, 115 PAR]
						<br/><br/>
						We have had our revenge on the mayor of Newkirk. With the help of the city of Ghouls known as the "Forsaken." With the mayor out of the way, the ghouls now have a
						chance to finally enter the city and have a chance at some decent housing and social acceptance. We have sealed the trust of them with their leader Sylvana.
						Sylvana has told us of thier unknowing of the sonic emitter. We parted ways, both parties having a better understanding of the other.
						<br/><br/><br/>
						[Nov 15, 115 PAR]
						<br/><br/>
						We decided to go see Recon Force IV in the north to investigate whether or not they had information about the sonic emitter. In attempt to infiltrate thier ranks
						we asked for an assignment to gain thier trust. We were commissioned to retrieve a drive with some important scientific data that predates the post
						apocalyptic record. After finding the disk we made our way instead to the sharks. We copied the data over to them for a new pair of car batteries
						after being told that the drive contained plans for a nuclear warhead. Of course these days there are little to no resources available for such a device to 
						be manufactured but the plans had value regardless.
						 <br/><br/>
						Leaving the sharks we made our way back over to the Recon Force IV and gave Lt. Steele the real disk.
						To our disappointment we were informed that the Recon teams were looking for the emitter as well but no one had reported it found. 
						<br/><br/><br/>
						[Dec 1, 115 PAR]
						<br/><br/>
						Left without much of a cause we find ourselves headed back to the forsaken hoping that we may gain some lead on the emitter...
						
					</p>
					
					<p>
						<a href="#top">Back to the top</a>
					</p>
			
CONTENT;

			return $content;
		}

	}
	
	$template = new DocTemplate();
	
	$story = new StorySoFar();
	
	$template->printHtml($story->getContent(),'','','');

?>
