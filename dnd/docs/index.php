<?php

	include 'DocTemplate.php';

	class Index{
		function getContent(){
			
			$content = <<<"CONTENT"
				<h1>Documentation</h1>
				<p>
				<a href="PlayersGuide.php">Player's Guide</a>
				</p>
				
				<p>
				<a href="StorySoFar.php">The Story So Far</a>
				</p>
				
				<p>
				<a href="Maps.php">Maps</a>
				</p>
				
				
				<h1>FAQ</h1>
				<h2>What is Dungeons and Dragons?</h2>
				<p class="contenttext">
					Dungeon and Dragons is the original table top roll playing game 
					in which players take on the role of a characters 
					that they create themselves. 
					
					Usually the party will engane in epic quests for fame and fortune
					in a world created by a dedicated person known as the dungeon master.
					The dungeon master controls all other elements of the story including
					other characters that are not being played. 
					
					The standard location of Dungeons and Dragons takes place in a
					midieval setting with knights in shining armor, damsels in distress,
					and of course, dragons to hunt.
					
					Characters are challenged with battles and obstacles that require
					a dice roll to determine if the challenge was passed or failed.
					The dice used can be any from a set of polyhedral dice like these:
					<br/>
					<img class='inline' width="300" height="175" src="../build/dice.jpg"/>
					<br/>
					The number of sides on each differ from 20, 12, 10, 8, 6, and 4. 
					They are represented usually as d20, d12, d10, etc.
					
					Character traits, abilities, skills, and inventory are kept track
					on a piece of paper known as a character sheet. The position of 
					each character is kept with a token of some sort on a map recorded 
					on your typical graph paper. 
					
					The posibilities are unlimited as the extent of the game is the 
					range of your imagination and the discretion of your dungeon master.
					
					Gameplay can take only an hour or across the span of serveral days.
					It can be for the lighthearted amatuer to the devoted hard-core gamer.
				</p>
				<br/>
				
				<h2>What is The City of Dreams?</h2>
				<p class="contenttext">
					The City of Dreams is a homebrew version that I have created that
					is very similar to the original Dungeons and Dragons except it
					takes place in the far future in a post apocolyptic setting.
					Mechanics are almost identical with a few twists. Weaponry, classes,
					races, are all different and match the setting that it takes place in. 
					The character sheet on this site is designed to accompany play with
					this version of D&D.
				</p>
				</br>
				
				<h2>Why would I ever play D&D?</h2>
				<p class="contenttext">
					After playing Dungeons and Dragons for some time I feel like I am
					still an amatuer at it. I feel like that it is easy to get into
					and not hard to understand at all. I personally find it most 
					entertaining simply because my friends and I can act goofy as 
					another personality in a ridiculous world with endless posibilities.
					It gives everyone an opportunity to be a hero or a villian and for
					them to give personality to this character. Because of this, the
					good times will roll because of the situations that characters will
					find them selves in situations that will make them strech. My last
					reason as to why I love this game is simply because rolling high
					feels good and it brings together any type of people and thier
					personalities as it makes the game far more interesting.
				</p>
CONTENT;

			return $content;
		}
	}
	
	$template = new DocTemplate();
	
	$index = new Index();
	
	$template->printHtml($index->getContent(),'','','');
?>
