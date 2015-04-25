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
					<a class="a1" href = "index.php">Blog Home</a>  |  <a class="a1" href="n2o.php">Newest to Oldest</a>  |  <a class="a1" href="o2n.php">Oldest to Newest</a>  |  <a class="a1"href="month.php">By Month</a>
				</div>
				
				<div class = "content">
				
					<h1>Blog Archive</h1>
					
					   <?php
							$con = mysql_connect("localhost","root","");
							if (!$con)
							  {
							  die('Could not connect: ' . mysql_error());
							  }
							
							else{
								
								mysql_select_db("website", $con);
								$entrys = mysql_query("select * from blog");
								
								echo "<table class = 'blogtable'>";
								while($row = mysql_fetch_array($entrys)){
									$temp[$row[entry_num]]=array($row[name],$row[date]);
								}
								//echo $temp[0][0].$temp[0][1].$temp[0][2];
								//echo mysql_querry("select extract('month' from \'".$temp[$i][1]."\')");
								for($i = 0;$i<count($temp);$i++){
									$month = abs(substr($temp[$i][1],5,2));
									switch($month){
										case 1: $month = "January";break;
										case 2: $month = "February";break;
										case 3: $month = "March";break;
										case 4: $month = "April";break;
										case 5: $month = "May";break;
										case 6: $month = "June";break;
										case 7: $month = "July";break;
										case 8: $month = "August";break;
										case 9: $month = "September";break;
										case 10: $month = "October";break;
										case 11: $month = "November";break;
										case 12: $month = "December";break;
										default: $month = "January";
									}
									
									$day = substr($temp[$i][1],8,2);
									$year =substr($temp[$i][1],0,4);
									$temp[$i][1] = $month." ".$day.", ".$year;
								}
								
								for($i =0;$i<count($temp);$i++){
									echo "<tr>";
									echo "<td>";
									echo "<a href='".$temp[$i][0].".php' class= 'a1'>".$temp[$i][0]."</a>";
									echo "</td>";
									echo "<td>";
									echo $temp[$i][1];
									echo "</td>";
									echo "</tr>";
								}
								
								echo "</table>";
								
								
								}
					   ?>
					
					   
				</div>
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
