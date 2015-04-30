
<?php

	include 'DocTemplate.php';

	class PlayersGuide{

		function getHeader(){
			$header = "<script language = 'javascript' src='playersguide.js'></script>";
			return $header;
		}

		function getContents(){
		
			$contents = <<<"CONTENTS"
					<div id="dummy2"><img id="arrows" class="arrows" src="../build/arrows.png" onclick="showcontents()"/></div>
						
					<div id="contents">
							
								<h2>Contents</h2>
								
								<p>
								<br/><a href="#races">-Races</a>
								<br/><a href="#classes">-Classes</a>
								<br/><a href="#skills">-Skills</a>				
								<br/><a href="#feats">-Feats</a>
								<br/><a href="#items">-Items</a>
								<br/><a href="#mechanics">-Mechanics</a>
								<br/><a href="#weapons">-ARC Weapons</a>
								</p>
								
					</div>
					
CONTENTS;
		
			return $contents;
		
		}

		function getContent(){
			
			$content = <<<"CONTENT"
				<h1>City of Dreams Players Guide</h1>
					<h2>v1.2</h2>
					
					<hr>
					
					<h1><a id="races">Races</a></h1>
					
					
					<h2>Average Joe</h2>
					<p>
						Just your run of the mill guy. You were just like every other kid in
						the sandbox and had straight B's your whole life. Regardless of the
						fact that your mom told you how special you really were, you never 
						really quite achieved anything in life besides winning the 4th grade
						spelling bee. Being average these days, however, is quite rare.
						
						<ul>
						<li>1 extra feat</li>
						<li>4 extra skill points to start with</li>
						</ul>
					</p>
					<br/>
					
					
					<h2>Android</h2>
					<p>
						Forged from the steel of machines and the flesh of man, your human
						ailments are no more. You may choose robotic limbs of your liking 
						and you are able to get future upgrades for them in the future, 
						dependent upon the fact that you can find someone to do it.
						
						<ul>
						<li>+1 strength</li>
						<li>+1 constitution</li>
						<li>-2 dexterity</li>
						<li>has potential for limb replacement upgrades</li>
						</ul>
					</p>
					<br/>
									
					
					<h2>Ghoul</h2>
					<p>
						The radiation of this world has made your flesh weak from the 
						unstable conditions you were exposed to. You have a hard time 
						keeping your skin from falling off and keeping your hair from 
						falling out. Your appearance causes many to flee but can cause your
						enemies to tremble. Because of these circumstances you have been 
						blessed with the gift, or curse, of an extended life. Your average 
						ghoul can have a nice life of 300 years, that is, of course, if he 
						makes it that long.

						<ul>
						<li>+1 wisdom</li>
						<li>+1 constitution</li>
						<li>-2 charisma</li>
						<li>+5 radiation resistance</li>
						<li>Terrifying Presence feat</li>
						</ul>
					</p>
					<br/>

					
					<h2>Mutant</h2>
					<p>
						Radiation at birth is a sad and rare occurrence indeed. More often 
						than ever, irradiated young are abandoned due to their abnormalities
						and rapid declining mental state. Fortunately for you though, you 
						love having a third limb! That extra hand really is useful for an 
						extra pistol or the fact that your alien sized eyes	make you see 
						things with much more clarity. But beware, no blessing is without
						its curse. Choose wisely.
						
						<li>1 helpful abnormality</li>
						<li>1 inhibiting mutation</li>
						<li>-3 radiation resistance</li>
						<li>+1 intelligence</li>
						</ul>
					</p>
					<br/>

					<hr>
					
					<h1><a id="classes">Classes</a></h1>
					
					
					
					<h2>Marine</h2>
					<p>
					Being a long time soldier has given you a sound understanding of the 
					ways of war and it's tools of destruction. You are well prepared to kill
					with any sort of weapon whether it be a pea-shooter or a nuclear missile.
					</p>
					
					<br/>
					<h3>Saves</h3>
					<table>
					<tr><td>Level</td><td>Fort<br/>Save</td><td>Ref<br/>Save</td><td>Will<br/>Save</td><td>Special</td></tr>
					<tr><td>1st</td><td>+1</td><td>+0</td><td>+0</td><td></td></tr>
					<tr><td>2nd</td><td>+3</td><td>+0</td><td>+0</td><td>+1 Feat or +1 to all weapon skills</td></tr>
					<tr><td>3rd</td><td>+3</td><td>+1</td><td>+1</td><td></td></tr>
					<tr><td>4th</td><td>+4</td><td>+1</td><td>+1</td><td>+1 to all weapon skills</td></tr>
					<tr><td>5th</td><td>+4</td><td>+1</td><td>+1</td><td></td></tr>
					<tr><td>6th</td><td>+5</td><td>+2</td><td>+2</td><td>+1 Feat or +1 to all weapon skills</td></tr>
					<tr><td>7th</td><td>+5</td><td>+2</td><td>+2</td><td></td></tr>
					<tr><td>8th</td><td>+6</td><td>+2</td><td>+2</td><td>+1 to all weapon skills</td></tr>
					<tr><td>9th</td><td>+6</td><td>+3</td><td>+3</td><td></td></tr>
					<tr><td>10th</td><td>+7</td><td>+3</td><td>+3</td><td>+1 Feat or +1 to all weapon skills</td></tr>
					</table>
					
					
					<h3>Class Skills</h3>
					<p>
					climb, craft, diplomacy, electronics, explosives, heal, heavy weapons, 
					intimidate, knowledge (weapons), listen, melee weapons, pistols, 
					profession (armed forces), rifles, spot, swim, survival
					</p>
					
					<ul>
					<li>SKILL POINTS PER LEVEL: 4 + intelligence modifier</li>
					<li>HD d10</li>
					<li>Wears light and medium armor</li>
					</ul>
					
					<h3>Special</h3>
					<p>
					As a marine you are prepared for any situation. As such you are able to
					develop extra feats to stay on top of the opponent or add +1 to
					all your weapon skills (pistols, rifles, heavy weapons). Your finese with
					guns and expertise in warfare have forged you into a killing machine.
					</p>

					<br/>
					
					<h2>Savage</h2>
					
					<h3>Saves</h3>
					<table>
					<tr><td>Level</td><td>Fort<br/>Save</td><td>Ref<br/>Save</td><td>Will<br/>Save</td><td>Special</td></tr>
					<tr><td>1st</td><td>+2</td><td>+0</td><td>+0</td><td>Berserk +/-5, Animal familiar</td></tr>
					<tr><td>2nd</td><td>+3</td><td>+0</td><td>+0</td><td></td></tr>
					<tr><td>3rd</td><td>+3</td><td>+1</td><td>+1</td><td>Berserk +/-10</td><td></td></tr>
					<tr><td>4th</td><td>+4</td><td>+1</td><td>+1</td><td></td></tr>
					<tr><td>5th</td><td>+4</td><td>+1</td><td>+1</td><td>Berserk +/-15, Animal Companion</td></tr>
					<tr><td>6th</td><td>+5</td><td>+2</td><td>+2</td><td></td></tr>
					<tr><td>7th</td><td>+5</td><td>+2</td><td>+2</td><td>Berserk +/-20</td></tr>
					<tr><td>8th</td><td>+6</td><td>+2</td><td>+2</td></tr>
					<tr><td>9th</td><td>+6</td><td>+3</td><td>+3</td><td>Berserk +/-25</td></tr>
					<tr><td>10th</td><td>+7</td><td>+3</td><td>+3</td></tr>
		
					</table>
						
					<h3>Class Skills</h3>
					<p>
					climb, cooking, explosives, handle animal, heavy weapons, intimidate,
					jump, listen, melee weapons, pistols, spot, survival, swim
					</p>

					<ul>
					<li>SKILL POINTS PER LEVEL: 2 + intelligence modifier</li>
					<li>HD d12</li>
					<li>Wears any type of armor</li>
					</ul>
					
					<h3>Special</h3>
					<p>
					The hardships of The Waste have pushed savages beyond the point of no
					return. Separated from humanity for most of their life time, Savages have
					lost many of their human characteristics and have grown to become as another radiated monster
					of The Waste. At level 1, savages may have an animal familiar
					and later have an animal companion at level 5. They may also berserk, going
					into a rage and dealing more damage but taking more at the same time from
					reckless attacking.
					</p>

					<br/>
					
					<h2>Doc</h2>
					
					
					<h3>Saves</h3>
					<table>
					<tr><td>Level</td><td>Fort<br/>Save</td><td>Ref<br/>Save</td><td>Will<br/>Save</td><td>Special</td></tr>
					<tr><td>1st</td><td>+0</td><td>+0</td><td>+2</td><td>Bandages</td></tr>
					<tr><td>2nd</td><td>+0</td><td>+0</td><td>+3</td><td>Antidote</td></tr>
					<tr><td>3rd</td><td>+1</td><td>+1</td><td>+3</td><td>Defibulator</td></tr>
					<tr><td>4th</td><td>+1</td><td>+1</td><td>+4</td><td></td></tr>
					<tr><td>5th</td><td>+1</td><td>+1</td><td>+4</td><td>Chemo</td></tr>
					<tr><td>6th</td><td>+2</td><td>+2</td><td>+5</td><td></td></tr>
					<tr><td>7th</td><td>+2</td><td>+2</td><td>+5</td><td>Surgery</td></tr>
					<tr><td>8th</td><td>+2</td><td>+2</td><td>+6</td><td></td></tr>
					<tr><td>9th</td><td>+3</td><td>+3</td><td>+6</td><td></td></tr>
					<tr><td>10th</td><td>+3</td><td>+3</td><td>+7</td><td></td></tr>

					</table>
					
					<h3>Class Skills</h3>
					<p>
					appraise, bluff, cooking, craft, diplomacy, forgery, gather information,
					heal, knowledge (surgery), knowledge (disease), listen, medicine, 
					melee weapons, pistols, profession (doctor), science, sense motive, spot
					</p>
					<ul>
					<li>SKILL POINTS PER LEVEL: 6 + intelligence modifier</li>

					<li>HD d4</li>

					<li>Wears light armor</li>

					<li>Carries ARC Battery</li>
					</ul>
					
					<h3>Special</h3>
					<p>
						Med School has taught you a thing or two but unfortunately The Waste has 
						little to offer in medical supplies. However, with crude tools, you are able
						to create makeshift tools to help others while venturing. You are
						able to heal others by means of makeshift bandages and field surgery as well
						as resurrect friends from the grave with a DIY defibrillator. A chemo recipe
						is later discovered to cure those inflicted with radiation poisoning. 
					</p>
					
					<h3>Recipes</h3>
					<p>
						Crude bandages - Alcohol + clean linen (+1d4 HP)
						<br/><br/>
						Defibrillator - Car battery + jumper cables + 12 pencils + copper wire + 
								thin aluminium sheets (Raises player from the dead)
								* Requires 800 voltz to charge *
						<br/><br/>
						Antidote - venom + pack of cigarettes + charcoal (+10 to next fort save)
						<br/><br/>
						Chemo - saline + syringe + fertilizer + 1 med + alcohol (-65 rad)
						<br/><br/>
						Surgery - Crude bandage + sharp knife + needle + thread (+3d10 HP)
						
					</p>

					<br/>

					
					<h2>Thief</h2>
					
					<h3>Saves</h3>
					<table>
					<tr><td>Level</td><td>Fort<br/>Save</td><td>Ref<br/>Save</td><td>Will<br/>Save</td><td>Special</td></tr>
					<tr><td>1st</td><td>+0</td><td>+2</td><td>+0</td><td>Sneak attack +1d6</td></tr>
					<tr><td>2nd</td><td>+0</td><td>+3</td><td>+0</td><td>Evasion</td></tr>
					<tr><td>3rd</td><td>+1</td><td>+3</td><td>+1</td><td>Sneak attack +2d6, Trap sense +1</td></tr>
					<tr><td>4th</td><td>+1</td><td>+4</td><td>+1</td><td></td></tr>
					<tr><td>5th</td><td>+1</td><td>+4</td><td>+1</td><td>Sneak attack +3d6</td></tr>
					<tr><td>6th</td><td>+2</td><td>+5</td><td>+2</td><td>Trap sense +2</td></tr>
					<tr><td>7th</td><td>+2</td><td>+5</td><td>+2</td><td>Sneak attack +4d6</td></tr>
					<tr><td>8th</td><td>+2</td><td>+6</td><td>+2</td><td></td></tr>
					<tr><td>9th</td><td>+3</td><td>+6</td><td>+3</td><td>Sneak attack +5d6, Trap sense +3</td></tr>
					<tr><td>10th</td><td>+3</td><td>+7</td><td>+3</td><td></td></tr>
					</table>
					
					<h3>Class Skills</h3>
					<p>
					appraise, balance, bluff, climb, craft, disable device, disguise, 
					electronics, escape artist, forgery, gather information, hide, jump, 
					knowledge (illegal activities), listen, melee weapons, move silently, 
					open lock, sleight of hand, spot, swim
					</p>

					<ul>
					<li>SKILL POINTS PER LEVEL: 8 + intelligence modifier</li>

					<li>HD d6</li>

					<li>Wears light armor</li>

					<li>Carries ARC Battery</li>
					</ul>
					
					<h3>Special</h3>
					<p>
					You are a master of the night. Your career up to this point has been due 
					to the misfortunes of others. You have a knack for taking things that don't
					belong to you and are irresistibly drawn towards shiny, metal objects. 
					Your stealth attack can be activated when attacking foes from out of sight.
					Your keen senses give you a bonus against disabling traps as well as 
					towards saves against them.

					</p>
					<br/>
					
					
					<p>
					<h2>Survivalist</h2>
				
					<h3>Saves</h3>
					<table>
					<tr><td>Level</td><td>Fort<br/>Save</td><td>Ref<br/>Save</td><td>Will<br/>Save</td><td>Special</td></tr>
					<tr><td>1st</td><td>+2</td><td>+2</td><td>+0</td><td>1st favored enemy (+2 bonus)</td></tr>
					<tr><td>2nd</td><td>+3</td><td>+3</td><td>+0</td><td>Animal companion</td></tr>
					<tr><td>3rd</td><td>+3</td><td>+3</td><td>+1</td><td>Tracking</td></tr>
					<tr><td>4th</td><td>+4</td><td>+4</td><td>+1</td><td></td></tr>
					<tr><td>5th</td><td>+4</td><td>+4</td><td>+1</td><td>2nd favored enemy (+3 bonus)</td></tr>
					<tr><td>6th</td><td>+5</td><td>+5</td><td>+2</td><td></td></tr>
					<tr><td>7th</td><td>+5</td><td>+5</td><td>+2</td><td></td></tr>
					<tr><td>8th</td><td>+6</td><td>+6</td><td>+2</td><td></td></tr>
					<tr><td>9th</td><td>+6</td><td>+6</td><td>+3</td><td></td></tr>
					<tr><td>10th</td><td>+7</td><td>+7</td><td>+3</td><td>3rd favored enemy (+5 bonus)</td></tr>
					</table>
					
					<h3>SKILLS</h3>
					<p>
					appraise, bluff, climb, cooking, craft, disguise, explosives,
					gather information, handle animal, heal, heavy weapons, hide, 
					jump listen, melee weapons, pistols, rifles, spot, survival, swim
					</p>
					<ul>
					<li>SKILL POINTS PER LEVEL: 4 + intelligence modifier</li>
					<li>HD d8</li>
					<li>Wears any type of armor</li>
					</ul>
					
					<h3>Special</h3>
					<p>
					Live, hunt, survive; That is the motto that you have given yourself as you
					have journeyed across the barren land. Your instincts, and your
					humanity are the only thing that separate you from the other lost souls
					that you have encountered. Through your survival skills, you have also gained
					animal alliances and the ability to track your next meal.
					</p>
					
					<h3>Track</h3>
					<p>
					Weather, terrain, and ground type will effect DC as well <br/>
					(Survival DC)<br/>
					10	1 Mile<br/>
					15	3 Miles<br/>
					20	7 Miles <br/>
					</p>

					<br/>
					
					
					<h2>Tech</h2>
					
					<h3>Saves</h3>
					<table>
					<tr><td>Level</td><td>Fort<br/>Save</td><td>Ref<br/>Save</td><td>Will<br/>Save</td><td>Special</td></tr>
					<tr><td>1st</td><td>+0</td><td>+0</td><td>+2</td><td>1 Robo Familiar</td></tr>
					<tr><td>2nd</td><td>+0</td><td>+0</td><td>+3</td><td></td></tr>
					<tr><td>3rd</td><td>+1</td><td>+1</td><td>+3</td><td></td></tr>
					<tr><td>4th</td><td>+1</td><td>+1</td><td>+4</td><td></td></tr>
					<tr><td>5th</td><td>+1</td><td>+1</td><td>+4</td><td>1 Robo Companion</td></tr>
					<tr><td>6th</td><td>+2</td><td>+2</td><td>+5</td><td></td></tr>
					<tr><td>7th</td><td>+2</td><td>+2</td><td>+5</td><td></td></tr>
					<tr><td>8th</td><td>+2</td><td>+2</td><td>+6</td><td></td></tr>
					<tr><td>9th</td><td>+3</td><td>+3</td><td>+6</td><td></td></tr>
					<tr><td>10th</td><td>+3</td><td>+3</td><td>+7</td><td></td></tr>
					</table>
					
					<h3>SKILLS</h3>
					<p>
						appraise, craft, decking, electronics, explosives, gather information, 
						knowledge (computers), listen, melee weapons, pistols, 
						profession (tech support), rifles, science, spot
					</p>
					<ul>
					<li>SKILL POINTS PER LEVEL: 4 + intelligence modifier</li>

					<li>HD d4</li>

					<li>Wears medium and light armor</li>

					<li>Carries ARC Battery</li>
					</ul>
						
					<h3>Special</h3>
					<p>
						As a lad you enjoyed taking the toaster apart and back together again at
						least 4 different ways. At age 16 you could apply the same principle to 
						a car engine. At age 19, you hacked the PSN and almost got thrown in federal
						prison for it. Armed with your knowledge of mathematics, Java, and 
						rudimentary robotics, you are able to construct a robot familiar and later
						gather enough parts for a robotic companion. Although you are the only person
						around that seems to be able to program anything worth 2 Voltz, you can 't
						lift a computer tower more than 2 feet.
					
					</p>

					<br/>
					<br/>

					<h2>Tables</h2>

					<table>
					<caption>Class Hit Die</caption>
					<tr><td>HD</td><td>Class</td></tr>
					<tr><td>d4</td><td>Tech, Doc</td></tr>
					<tr><td>d6</td><td>Thief</td></tr>
					<tr><td>d8</td><td>Survivalist</td></tr>
					<tr><td>d10</td><td>Marine</td></tr>
					<tr><td>d12</td><td>Savage</td></tr>
					</table>
					<br/><br/>
					*NOTE*<br/>
					-Starting health is equal to the max value of a character's hit dit (ex: 6 for a d6) plus constitution modifier<br/>
					-When levelling up, add 1HD + constitution modifier to your health.<br/>
					<br/><br/>
					<table>
					<caption>Skill Point Modifiers</caption>
					<tr><td>Class</td><td>Modifier</td></tr>
					<tr><td>Marine</td><td>+4</td></tr>
					<tr><td>Savage</td><td>+2</td></tr>
					<tr><td>Doc</td><td>+6</td></tr>
					<tr><td>Thief</td><td>+8</td></tr>
					<tr><td>Survivalist</td><td>+4</td></tr>
					<tr><td>Tech</td><td>+4</td></tr>
					</table>
					
					<br/>
					<hr>
					
					
					<a id="skills"></a><h1>Skills</h1>
					
					<p>
					Max class skill = character level + 3
					<br/><br/>
					Max cross class skill = half of max class skill. (Round down)
					<br/><br/>
					Starting skills = (class skill point modifier + INT modifier)*4
					<br/><br/>
					Skill points each level = class skill point modifier + INT modifier
					</p>
					
					
					<h3>APPRAISE</h3>
						<p class="subtext">
						Used in bartering and determining value of items
						<br/><br/>
						DC<br/>
						10 - within 50% of value<br/>
						15 - within 25% of value<br/>
						20 - within 5% of value
						</p>
					<h3>BALANCE</h3>
						<p class="subtext">
						Used to surpass traps in dungeons
						<br/><br/>
						DC depends on obstacle
						</p>
						
					<h3>BLUFF</h3>
						<p class="subtext">
						The ability to lie to people
						<br/><br/>
						DC compares against opponents Bluff check
						</p>
					<h3>CLIMB</h3>
						<p class="subtext">
						Used to surpass obstacles of height in dungeons
						<br/><br/>
						DC depends on obstacle
						</p>
						
					<h3>COOKING</h3>
						<p class="subtext">
						Needed to create food that could otherwise not be edible
						<br/>
						<table>
						<caption>DC</caption>
						<tr><td><10</td><td>-Burn food</td></tr>
						<tr><td>10-15</td><td>-Not cooked enough</td></tr>
						<tr><td>>15</td><td>-Cooked well</td></tr>
						</table>
						</p>
						
					<h3>CRAFT</h3>
						<p class="subtext">
						The ability to create items from schematics found in The Waste
						<br/>
						<table>
						<caption>DC</caption>
						<tr><td><7</td><td>50% materials are wasted and craft fails</td></tr>
						<tr><td>8-16</td><td>20% more materials are needed but craft succeeds</td></tr>
						<tr><td>>17</td><td>craft succeeds with no fault</td></tr>
						</table>
						</p>
						
					<h3>DECKING</h3>
						<p class="subtext">
						AKA Hacking or compromising a computer console
						<br/><br/>
						DC depends on obstacle
						</p>
						
					<h3>DIPLOMACY</h3>
						<p class="subtext">
						The ability to create friends and foes
						<br/><br/>
						DC compares against opponents Diploymacy check
						</p>
						
					<h3>DISABLE DEVICE</h3>
						<p class="subtext">
						Used to disable any mechanical trap in dungeons
						<br/><br/>
						DC depends on obstacle
						</p>
						
					<h3>DISGUISE</h3>
						<p class="subtext">
						Determines your ability to hide yourself in plain sight
						<br/><br/>
						DC compares against opponents Spot check
						</p>
						
					<h3>ELECTRONICS</h3>
						<p class="subtext">
						Used to disable any electronic trap or use any electronic device
						<br/><br/>
						DC depends on obstacle
						</p>

					<h3>ESCAPE ARTIST</h3>
						<p class="subtext">
						Used to escape from bondage
						<br/><br/>
						DC depends on obstacle
						</p>
						
					<h3>EXPLOSIVES</h3>
						<p class="subtext">
						Determines effectiveness with explosive devices
						</p>

					<h3>FORGERY</h3>
						<p class="subtext">
						Ability to create false documents
						<br/><br/>
						DC compares against opponents Wisdom check
						</br><br/>
						*Requires nessisary tools and materials for the forgery
						</p>

					<h3>GATHER INFORMATION</h3>
						<p class="subtext">
							General ability to gather gossip and information from surroundings
							<br/>
						<table>
						<caption>DC</caption>
						<tr><td><12</td><td>Find out less than you wanted to know </td></tr>
						<tr><td>13-18</td><td>Find out specifically what you wanted to know</td></tr>
						<tr><td>>19</td><td>Find out what you wanted to know and perhaps more</td></tr>
						</table>
						<br/>
						*limit to one attempt a day
						</p>
						
					<h3>HANDLE ANIMAL</h3>
						<p class="subtext">
						Determines how friendly animals react to you 
						<br/><br/>
						DC compares to animals to animals Charisma check
						</p>

					<h3>HEAL</h3>
						<p class="subtext">
						Used to stabilize a dying companion. 
						<br/>
						<table>
						<caption>DC</caption>
						<tr><td><13</td><td>friend stays dying</td></tr>
						<tr><td>>14</td><td>stabilizes companion</td></tr>
						</table>
						</p>

					<h3>HEAVY WEAPONS</h3>
						<p class="subtext">
						Determines effectiveness with heavy-class weapons
						</p>
						
					<h3>HIDE</h3>
						<p class="subtext">
						Determines the ability to hide in shadows and coverings
						<br/><br/>
						DC compares against enemy Spot check
						</p>
						
					<h3>INTIMIDATE</h3>
					<p class="subtext">
						Determines how well you can scare the pants off others
						<br/><br/>
						DC compares against enemy Bluff check
						</p>

					<h3>JUMP</h3>
					<p class="subtext">
						Used to overcome a large gap or vertical ledge
						<br/><br/>
						DC depends on obstacle
						</p>

					<h3>KNOWLEDGE</h3>
					<p class="subtext">
						Determines your understanding of a subject
						<br/><br/>
						DC depends on subject or situation
						</p>

					<h3>LISTEN</h3>
					<p class="subtext">
						Can be used to discover enemies before they see you
						<br/><br/>
						DC compares to enemy's Move Silently check 
						</p>

					<h3>MEDICINE</h3>
					<p class="subtext">
						Effectiveness with medicines and a scalpel to recover health
						<br/><br/>
						DC depends on drug/treatment being applied
						</p>

					<h3>MELEE WEAPONS</h3>
					<p class="subtext">
						Determines effectiveness with basic melee weapons
						</p>

					<h3>MOVE SILENTLY</h3>
					<p class="subtext">
						How well you can sneak unnoticed by others
						<br/><br/>
						DC compares against enemy Listen check
						</p>

					<h3>OPEN LOCK</h3>
					<p class="subtext">
						Used to open mechanical locks
						<br/><br/>
						DC depends on obstacle
						</p>

					<h3>PISTOLS</h3>
					<p class="subtext">
						Determines your effectiveness with pistol class weapons
						</p>

					<h3>PROFESSION</h3>
					<p class="subtext">
						Can be used daily to gain voltz
						<br/><br/>
						Voltz = DC * user level
						<br/><br/>					
						*can only be used once daily
						</p>

					<h3>RIFLES</h3>
					<p class="subtext">
						Determines your effectiveness with rifle class weapons
						</p>

					<h3>SCIENCE</h3>
					<p class="subtext">
						You understanding of chemicals and chemical composition
						</p>

					<h3>SENSE MOTIVE</h3>
					<p class="subtext">
						Determines your ability to detect if someone is lying
						</p>

					<h3>SLEIGHT OF HAND</h3>
					<p class="subtext">
						Determines your ability to steal with out attracting attention
						</p>

					<h3>SPOT</h3>
					<p class="subtext">
						Determines your ability to identify things that others would simply pass by
						</p>

					<h3>SURVIVAL</h3>
					<p class="subtext">
						Used to forage for supplies outside and hunting creatures
						</p>

					<h3>SWIM</h3>
					<p class="subtext">
						Determines whether you sink or swim
						</p>
					
					
					<hr>

					
					<a id="feats"></a><h1>Feats</h1>
					
					<p>
					*You start with one feat and gain one at level 3, 6, and 9*
					</p>
					
					<h3>Terrifying Presence</h3>
					<p class="subtext">
						You are a freak of nature.
						+2 Intimidate
						</p>

					<h3>Radical!</h3>
					<p class="subtext">
						Exposure to radiation has given you a natural 
						immunity to radiation poisoning. +4 Radiation Resistance
						</p>

					<h3>Scar tissue</h3>
					<p class="subtext">
						You are given a bonus for past battles and the 
						experience from it. +1 Constitution
						</p>
						
					<h3>Blade master</h3>
					<p class="subtext">
						You can use your dexterity bonus instead of strength 
						bonus when fighting with blades of any kind
						</p>

					<h3>Mathlete</h3>
					<p class="subtext">
						You are as nerdy as they come
						+3 Decking
						</p>

					<h3>Iron Gut</h3>
					<p class="subtext">
						You stomach acid is like battery acid
						+3 Radiation Resistance when eating food
						</p>

					<h3>Atomic Growth</h3>
					<p class="subtext">
						You can drink from radiated water sources to regain 
						1d6 health everyday
						</p>

					<h3>Tinker</h3>
					<p class="subtext">
						Get +1 to Open Lock, Electronics, and Decking
						</p>

					<h3>Iron chef</h3>
					<p class="subtext">
						Get a bonus to cooking for culinary school
						+4 to Cooking
						</p>

					<h3>Dancing lessons</h3>
					<p class="subtext">
						Mom embarrassed you as a child and made you take 'em
						+3 Reflex Saves
						</p>

					<h3>Duel wielding</h3>
					<p class="subtext">
						You have no penalty for using two pistols 
						with both hands
						</p>

					<h3>Al Queda</h3>
					<p class="subtext">
						You like rifles, you get a +3 proficiency to 
						the Rifle skill
						</p>

					<h3>Firebat</h3>
					<p class="subtext">
						Need a light?
						Learn Napalm recipe
						</p>

					<h3>Arnold</h3>
					<p class="subtext">
						The best gun is the biggest gun
						+3 to Heavy Weapon skill.
						</p>

					<h3>Sheriff Rick</h3>
					<p class="subtext">
						Pistols are more your style
						+3 to Pistols skill
						</p>

					<h3>Fullmetal Alchemist</h3>
					<p class="subtext">
						In addition you receive a custom cocktail from the 
						DM that only you can make. +3 Science 
						</p>
						
					<h3>Black widow </h3>
					<p class="subtext">
						You have a sexy side and when bluffing, bargaining, and
						talking diplomatically with the opposite gender. 
						You gain a +3 to rolls when doing so.
						</p>

					<h3>Cat like reflexes</h3>
					<p class="subtext">
						Can't touch this.
						+1 AC permanently
						+1 reflex save
						</p>

					<h3>Asian</h3>
					<p class="subtext">
						You are just better for some reason.
						+1 any ability score permanently
						</p>

					<h3>Kamikaze</h3>
					<p class="subtext">
						Boom goes the dynamite.
						+3 to Explosives skill
						</p>

					<h3>Metaclorians</h3>
					<p class="subtext">
						Little nano organisms are taking nest in your blood
						+2 Fortitude Saves
					</p>
					
					
					<hr>
					
					<a id="items"></a><h1>Items</h1>
					
					<p>

					*this lists a few of the basic things that you may encounter 
								and is in no way a complete list*
					</p>


					<h3>Scrap bolts (100 voltz)</h3>
					<p class="subtext">
						Represents 1 lb of small metal objects. Items may be 
						converted to scrap metal but not vice-versa. Used in
						various schematics and considered versatile when 
						fixing things as well. Can be obtained from any 
						mechanical structure but such structure is disassembled 
						and deemed unusable till fixed with more bolts.
						</p>

						
					<h3>Battery (worth its capacity)</h3>
						
						
					<h3>Food </h3>
					<p class="subtext">
						Food is so rare it is it's own currency and is extremely 
						valuable in the vast waste. Many people will be very 
						hesitant to part with their food as it could be their 
						last meal. Foods can be crafted	and obtained other ways 
						though. Normal food give off 1d10 radiation points when 
						consumed. Well prepared organic food gives significantly
						more health and is not irradiated. Good luck finding it 
						though. 
						</p>


					<h2>MEDS</h2>
					<p class="subtext">
						Meds are a valuable commodity as well and are quite rare:
					</p>
					
					<h3>Rad B Gone</h3>
					<p class="subtext">
						From the makers of RadX and RadAway, Pipboy industries 
						gives us another great product to help clear away that 
						pesky radiation that exists well... everywhere.
						<br/><br/>
						(-RADs)
						
						</p>

						
					<h3>Smarts</h3>
					<p class="subtext">
						Smarts earned its street name from dealers around the 
						city who advertise that	you will get "smarts" from it.
						Other side effects have been noted to be apparent 
						besides the increase in brain functionality.
						<br/><br/>
						(+WIS, +INT, -STR)
						</p>
						
						
					<h3>Crystal</h3>
					<p class="subtext">
						Recent drug activity has started circulation of 
						methamphetamines, and a particular one called "Crystal" is
						known for its slight blue hue and its effects on reflex 
						reactions. Of course too much of a good thing couldn't 
						possibly be bad.
						<br/><br/>
						(+CON, -DEX)
						</p>
						

					<h3>StimPak</h3>
					<p class="subtext">
						Government circulation of StimPaks have made this drug
						a common site in The Wastes as people find a way to 
						get rid of nerves and prepare for battle. Increased 
						blood flow in the user makes blood clotting occur at 
						a much slower rate which has its effects as well.	
						<br/><br/>
						(+DEX, -CON)
						</p>
						
							
					<h3>Rage</h3>
					<p class="subtext">
						Users of the street drug known as Rage have been 
						reported as unstoppable. Rapid muscle growth and cell 
						division are some common effects from this drug, but a
						deterioration of brain matter seems to compensate for
						the sudden change in muscle mass. 
						<br/><br/>
						(+STR, -WIS)
						</p>
						
						
					<h2>MELEE WEAPONS</h2>

					<h3>Baseball Bat (1d6+1) (crit 19-20 x2)</h3>
					<p class="subtext">
						Hit a homer with this crude weapon. Hit as hard as 
						you want but has a 5% chance to break each swing.
						</p>

					<h3>Improvised blunt weapon(1d4+2) (crit 20 x2)</h3>
					<p class="subtext">
						Don't have much? Use anything blunt! Has 5% chance
						to fail and break.
						</p>

					<h3>Shiv (1d6) (crit 19-20 x2)</h3>
					<p class="subtext">
						Close quarters makeshift blade made to do 
						the dirty work.
						</p>

					<h3>Baton (1d6) (crit 19-20 x2)</h3>
					<p class="subtext">
						Useful for crowd control or just beating the tar 
						out of someone. Has a shorter range than you think. 
						</p>
						
					<p>
					How to determine damage with a melee weapon:
					<br/><br/>
					damage = str modifier + weapon damage
					
					</p>
					
					<h2>RANGED WEAPONS</h2>
					
					<p>
					<h3>Weight Conversion</h3>
					*20 shells = 1 lb*
					</p>
					
					<h3>Bullet Sizes</h3>
					<p>
						.22 <br/>
						9mm <br/>
						.380 <br/>
						5.56 <br/>
						.45 <br/>
						.30 <br/>
						.308 <br/>
						<br/><br/>
						shell <br/>
						slug 
					</p>
					
					<h3>Damage per bullet type</h3>
					<p class="subtext">
						Hull Point = +1
						Armor Penetrating = +2
						Explosive = +2
						Dragons Breath = +1d4 fire damage
					</p>
					
					<p>
					How to determine damage with a ranged weapon:
					<br/><br/>
					damage = bullet damage + weapon damage
					</p>


					<h2>Rifles</h2>
					 
					 <p>
					*All rifles have a range of 50ft*
					*All unmodified rifles do 1d6 damage
					</p>

					<h3>AK47</h3>
					<p class="subtext">
						Ammo:(5.56/9mm)
						Fire Rate:(3x)
						Crit: 19-20 x2
						</p>
						
					<h3>AR15</h3>
					<p class="subtext">
						Ammo:(5.56)
						Fire Rate:(3x)
						Crit: 18-20 x2
						</p>
						
					<h3>M16 </h3>
					<p class="subtext">
						Ammo:(5.56/.45)
						Fire Rate:(3x)
						Crit: 19-20 x2
						</p>

					<h3>M1 Garand</h3>
					<p class="subtext">
						Ammo:(.30)
						Fire Rate:(2x)
						Crit: 18-20 x3
						</p>

					<h3>Remington 870 (Pump Shotgun)</h3>
					<p class="subtext">
						Ammo:(shells)
						Fire Rate:(1x)
						Crit: 18-20 x2
						*Shot may be directed to hit 2 adjacent enemies.
								   Damage is split*


					<h2>Pistols</h2>
					<p>
					*All pistols have a range of 20ft*
					*All unmodified pistols do 1d8 damage
					</p>
					
					<h3>Glock 17</h3>
					<p class="subtext">
						Ammo:(9mm)
						Fire Rate:(2x)
						Crit: 18-20 x3
						</p>
						
					<h3>Colt Peacemaker</h3>
					<p class="subtext">
						Ammo: (.45)
						Fire Rate:(2x)
						Crit: 18-20 x3
						</p>
						
					<h3>Ruger mkIII</h3>
					<p class="subtext">
						Ammo:(.22)
						Fire Rate(2x)
						Crit: 20 x2
						</p>
						
					<h2>Snipers</h2>
					*All snipers have a range of 100ft*
					*All unmodified snipers do 1d10 damage

					<h3>Springfield 70</h3>
					<p class="subtext">
						Ammo:(.308)
						Fire Rate:(1x)
						</p>
						

					<h2>EXPLOSIVES</h2>

					<h3>Pineapple</h3>
					<p class="subtext">
						Does 1d8 damage to 1d4 enemies in a 10ft radius 
						around impact point. Doesn't taste as good 
						as advertised. 
						</p>


					<h3>Frag Mine</h3>
					<p class="subtext">
						Much like its throw-able counterpart. 
						Deals 1d8 damage to 1d4 enemies around 10ft 
						from its impact point.
					</p>
					
					<p>
					How to determine damage with an explosive weapon:
					<br/><br/>
					damage = weapon damage

					</p>
					
					<hr>
					
					
					<a id="mechanics"></a><h1>Mechanics</h1>
					
					
					<h2>Your Turn</h2>
					<p>
					Your turn consists of 1 movement and 1 attack or 2 movements.
					When your character levels up enough they will be able to make 2 attack moves.
					You have unlimited "free" actions like talking, or pointing. Drawing your weapon is
					a free action but will cause an attack of opportunity. Standing up from a prone position
					counts as 1 movement action.
					</p>
					
					<h2>Attack of Opportunity</h2>
					<p>
					Attacks of opportunity are extra attacks that ajacent enemies may take when certain actions
					are taken. Examples of this are:
					<ul>
						<li>Drawing your weapon</li>
						<li>Running next to an enemy without attacking it</li>
						<li>Standing up from a prone position</li>
						<li>Running away from an enemy without attacking it</li>
					</ul>
					
					You may move away from an enemy when in combat but this will take 1 movement action and you
					will only travel 5 ft. This is known as a "safe" move.
					</p>

					<h2>Attacking</h2>
					<p>
					Attack roll: Any weapon - use d20 and add weapon skill/3
					<br/><br/>		 
								 
					Damage roll: Melee - use weapon damage dice + str modifier
								 Ranged - use weapon damage dice + bullet type damage 
					<br/><br/>			 
					Ammo: Each ranged weapon has a fire rate. Fire rate determines ammunition used to make a single successful attack per turn.
					</p>

					<h2>Radiation</h2>
					<p>
					Radiation resistance is the value that radiation startst to take effect.
					<br/><br/>
					ex: You have a radiation resistance of 5. You eat some food that makes you take 1d10 of radiation. 
						You roll a 4. Because 4 < 5 you take no effect from it. You then fall into a trap and take 7 radiation from
						water. 7 > 5 (your resistance) therefore you take on 2 points of radiation because 7 - 5 = 2.
					<br/><br/>
					The effects of radiation are determined as such:
					</p>
					
					<table>
					<tr><td><10</td><td>no ill effects</td></tr>

					<tr><td>11-25</td><td>-1 str<br/>-1 dex</td></tr>
							
					<tr><td>25-40</td><td>-2 str<br/>-1 dex<br/>-1 con</td></tr>
							
					<tr><td>40-55</td><td>-2 str<br/>-1 dex<br/>-2 con</td></tr>
							
					<tr><td>55-70</td><td>-2 str<br/>-2 dex<br/>-2 con</td></tr>
							
					<tr><td>80-90</td><td>-2 str<br/>-2 dex<br/>-2 con<br/>-2 wis</td></tr>

					<tr><td>>90</td><td>-2 str<br/>-2 dex<br/>-2 con<br/>2 wis<br/>-2 cha</td></tr>
					</table>
					
					<h2>Leveling Up</h2>
					
					<p>
						Things to do when you level up:
						
						<ul>
							<li>Roll your Hit Die (HD) assosiated with your class and add that number to your max hit points</li>
							<li>Add skill points  (class skill modifier + INT modifier)</li>
							<li>Update your saves (see your class saving throws table)</li>
							<li>If you are now level 3,6, or 9 then add another feat</li>
							<li>See class saving throws table for other feats/abilities unlocked including new craftable recipes</li>
						</ul>
					
					</p>
					<hr>
					
					<a id="weapons"></a><h1>ARC Weapons</h1>
					
					<p>
					
					ARC weaponry use ARC batteries
					which are a miracle in the technological world. ARC batteries are able
					to self-recharge per 24 hours. The energy stored within them has such
					high voltage that they shor circuit any conventional electronics, which renders them almost useless. 
					Because of their mysterious origins,
					some say that this stored energy is nuclear while others claim it to be
					of another world. Despite the technology that actually surrounds these 
					batteries, there are select devices that are found throughout The Waste
					that are able to harness this energy. Most usable devices are in forms
					of weapons and require an amount of wattage per use. An ARC battery's wattage 
					is recharged at the end of each day.
					<br/><br/>
					Saving throws can be made against ARC weapons are made as such:
					<br/><br/>
					10 + save mod > 10 + caster level + (wattage of weapon / 10)
					<br/><br/>
					
					<table>
						<caption>ARC Weapons</caption>
					<tr><td>Flare Lamp</td><td>10 WATT Emits burst of light lasting 1d4 rounds</td></tr>

					<tr><td>Water Filter</td><td>10 WATT Able to test the purity of water and food

					<tr><td>Joy Buzzer</td><td>10 WATT Hide this in you hand and give a friend a zap</td></tr>

					<tr><td>NanoBots</td><td>10 WATT Gives recipient +1 HP</td></tr>

					<tr><td>Noisy Cell Phone</td><td>20 WATT Makes annoying sounds. Can distract 1d4 creatures up to 1d4 hit die for 1d4 turns. WILL save negates.</td></tr>

					<tr><td>Tazer</td><td>20 WATT Melee weapon that does 1d6 damage. FORT save halves.</td></tr>

					<tr><td>Electro-puncture</td><td>20 WATT Facial electro needles that increase discuise rating by 5.</td></tr>

					<tr><td>OmniWrench</td><td>20 WATT Charged melee blunt weapon that deals 1d6 damage</td></tr>

					<tr><td>Holo-emitter</td><td>30 WATT Able to project 3D images and sounds on a countdown timer. Can distract 1d4 creatures with 1d6 hit die for 1d4 turns. WILL save negates</td></tr>

					<tr><td>Stun Gun</td><td>30 WATT 30 ft ranged weapon that deals 1d6+1 damage. REFLEX halves.</td></tr>

					<tr><td>Tazer Field</td><td>30 WATT Personal force field surrounds user and deals 1d6+4 to enemies that touch it. FORTITUDE halves.</td></tr>

					<tr><td>Laser Pistol</td><td>30 WATT 30 ft ranged weapon that deals 1d8 damage. REFLEX halves. May start fires</td></tr>

					<tr><td>Magneton</td><td>30 WATT Recipient gains +2 AC from floating rotating electromagnets</td></tr>

					<tr><td>Sting(Cattle Prod)</td><td>40 WATT Melee weapon that does 1d6+5 damage. FORT save halves.</td></tr>

					<tr><td>EES</td><td>40 WATT For 1d4 HP, +2 STR for 1d4 rounds</td></tr>

					<tr><td>EMP Grenade</td><td>40 WATT Grenade weapon that deals 1d12+1 damage to 1d4 enemies. FORTITUDE halves.</td></tr>

					<tr><td>Gravity Boots</td><td>40 WATT For 1d4 HP, +2 DEX for 1d4 rounds</td></tr>

					<tr><td>PsyNodes</td><td>40 WATT -2 CON +2 WIS for 1 day</td></tr>

					<tr><td>Tesla Claw</td><td>50 WATT Melee weapon that deals 2d6 damage. FORT save halves.</td></tr>

					<tr><td>Solar Flare</td><td>50 WATT Grenade weapon that can blind 1d4 creatures up to 1d8 hit die for 1d4 turns. WILL save negates</td></tr>

					<tr><td>Sonic Disrupter</td><td>50 WATT 30 ft ranged weapon that can incapacitate 1 creature up to 1d8 hit die. WILL save negates.</td></tr>

					<tr><td>ARC bow</td><td>50 WATT	30 ft ranged weapon that fires lightning rods that deal 1d6 damage and 1d4 damage for 1d4 rounds. FORTITUDE halves.</td></tr>

					<tr><td>Exploding George</td><td>60 WATT Grenade weapon that distracts 1d4 creatures up to 1d8 hit die and explodes plasma for 1d12+2 damage </td></tr>

					<tr><td>Plasma Pistol</td><td>60 WATT 30 ft ranged weapon that deals 1d10+1 damage. REFLEX halves.</td></tr>

					<tr><td>Laser Rifle</td><td>70 WATT 40 ft ranged weapon that deals 1d12 damage. REFLEX halves. May start fires.</td></tr>

					<tr><td>Plasma Rifle</td><td>80 WATT 40 ft ranged weapon that deals 2d8 damage. REFLEX halves.</td></tr>

					<tr><td>Guass Cannon</td><td>100 WATT 50 ft ranged weapon that deals 2d10 damage. REFLEX halves.</td></tr>

					<tr><td>Rail Gun</td><td>100 WATT 50 ft ranged weapon that deals 2d12 damage. REFLEX halves.</td></tr>
											 
					</table>
					</p>
		
		
CONTENT;

			return $content;
		}

	}
	
	$template = new DocTemplate();
	
	$guide = new PlayersGuide();
	
	$template->printHtml($guide->getContent(),$guide->getHeader(),'',$guide->getContents());
?>
