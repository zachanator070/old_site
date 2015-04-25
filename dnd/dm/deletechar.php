<!DOCTYPE HTML>
<meta charset="UTF-8">


<html>

<?php
	
	//ini_set("display_errors", 1);
	
	$con=mysqli_connect("thezachcave.com","dnd","datadog","dnd");
	
	if (!$con)
	  {
		die("Failed to connect to Character Database: " . mysqli_error($con)."<br/>");
	  }

	$name = $_POST['name'];
	
	$query[0]="DELETE from attacks where name='".$name."'";
	$query[1]="DELETE from stats where name='".$name."'";
	$query[2]="DELETE from info where name='".$name."'";
	$query[3]="DELETE from defense where name='".$name."'";
	$query[4]="DELETE from equipment where name='".$name."'";
	$query[5]="DELETE from saves where name='".$name."'";
	$query[6]="DELETE from skills where name ='".$name."'";
	$query[7]="DELETE from feats where name ='".$name."'";
	
	$size=count($query);
	for($x=0;$x<$size;$x++){
		$result = mysqli_query($con,$query[$x]);
			
		if (!$result) {
			die('Invalid query: ' . mysqli_error($con)."<br/>");
		}
	}
	
	$pictures = scandir('../characters/'.$name,1);
			
	$size =count($pictures)-2;
			
			
			
	for($x=0;$x<$size;$x++){
		
		unlink('../characters/'.$name.'/'.$pictures[$x]);
		
	}
	
	rmdir("../characters/".$name);
?>


<form name='autoload' method='post' action='index.php'>
		<input type='hidden' name='name' value=<?php echo ''.$name.''; ?>>
	</form>
	
	<script>
	
		function submitOnLoad(){
			document.autoload.submit();
		}
	
		submitOnLoad();
	</script>
</html>
