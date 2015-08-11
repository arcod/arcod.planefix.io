<?php 

$squareRoot = 5;

if (!isset($_POST["level"])){
	$_POST['level'] = 501;
}

if(!isset($_COOKIE['savedLevel'])){
	setcookie("savedLevel", 501, time()+60*60*24*30);
	$_COOKIE['savedLevel'] = 501;

}

//if(isset($_COOKIE['savedLevel']) && $_COOKIE['savedLevel'] <= $_POST["level"]){
//	setcookie("savedLevel", $_POST["level"], time()+60*60*24*30);
//	$_COOKIE['savedLevel'] = $_POST["level"];
//}


$level = "s".$_POST['level']."c1";
$levelA = "s".$_POST['level'];
$levelStart = "s".$_POST['level']."Start";


include 'levels.php';

?>
<!DOCTYPE html>




<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/planeFixCSS.php">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<head>


</head>

<script>
function levelSelector(){
	if( $('#levelSelector:empty').length ) {
		$( '#levelSelector' ).load( 'levelSelector.php' )
	}
	$( '#levelSelector' ).fadeToggle(1000);
}
</script>

<html>
<body>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/honeycomb/nav.php' ); ?>

<div id="top">
	<div class="title">
	<h1>Plane Shift</h1>
	<a>Click on an arrow to shift a row.</a>
	<a>Replicate the target condition to win.</a>
	</div>
	
	<div class="targetFrame top" 
				onclick="levelSelector()">
			<?php
				$rowCounter = 0;
				$cellCounter=0;
				while ($rowCounter < $squareRoot){
					$rowCounter++;
					echo "<div class='targetRow'>";

					while ($cellCounter<$rowCounter*$squareRoot){
						$cellCounter++;
						echo "<div class='targetCell";
						
						foreach ($$levelA as $key => $value)
							if (in_array($cellCounter, $value, true )){
								echo " {$key}";
							}
							echo "'></div>";
					}
					echo "</div>";
				}
?>
	</div>
</div>


<div class="frame">
	<div class="buttonRow">
		<?php 
			$buttonCounter = 0;
			while ($buttonCounter < $squareRoot){
				$buttonCounter++;
				echo "<div class='btnRowContainer'>";
				echo "<svg class='arrow up' id='".$buttonCounter."up'>
				  <g
     				inkscape:label='Layer 1'
    				inkscape:groupmode='layer'
     				id='layer1'>
     			<path
    			   style='fill:#b3b3b3;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1'
    			   d='m 328.57143,55.219348 -140,180.000002 110,-60 0,145.71429 60,0 0,-145.71429 110,60 z'
     			   id='path4601'
      			   transform='scale(.1)'; 
     			   inkscape:connector-curvature='0' /> </g>
				
				</svg>";
				echo "</div>";
			}
		
		?>

	</div>
	<?php 
	
		$rowCounter = 0;
		$cellCounter = 0;	
		
		while ($rowCounter < $squareRoot){
			$rowCounter++;
			echo "<div class='row".$rowCounter."'>";
			echo "<div class='btncontainer'>\n";
			echo "<svg class='arrow left' id='".$rowCounter."left'>
				  <g
					inkscape:label='Layer 1'
					inkscape:groupmode='layer'
     				id='layer1' 
     				>
     			<path
       				style='fill:#b3b3b3;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1'
       				d='m 328.57143,55.219348 -140,180.000002 110,-60 0,145.71429 60,0 0,-145.71429 110,60 z'
      			 	id='path4601'
       				transform='scale(.1)'; 
       				inkscape:connector-curvature='0' /> </g>
				</svg>";
			echo "</div>";
			while ($cellCounter < ($rowCounter*$squareRoot)){
				$cellCounter++;
				echo "<div class='container' id='pos".$cellCounter."'>\n";
				echo "<div class='cell";
				foreach ($$levelStart as $key => $value){
					if (in_array($cellCounter, $value, true )){
						echo " {$key}";
					}
				}
				echo "' id='cell".$cellCounter."'><span></span></div>\n";
				echo "</div>\n";
			}
			echo "<div class='btncontainer'>\n";
			echo "<svg class='arrow right' id='".$rowCounter."right'>
				  <g
					inkscape:label='Layer 1'
					inkscape:groupmode='layer'
     				id='layer1' 
     				>
     			<path
       				style='fill:#b3b3b3;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1'
       				d='m 328.57143,55.219348 -140,180.000002 110,-60 0,145.71429 60,0 0,-145.71429 110,60 z'
      			 	id='path4601'
       				transform='scale(.1)'; 
       				inkscape:connector-curvature='0' /> </g>
				</svg>";
			echo "</div>";
			echo "</div>\n";
		}
		

	
	?>

	<div class="buttonRow">
		<?php 
			$buttonCounter = 0;
			while ($buttonCounter < $squareRoot){
				$buttonCounter++;
				echo "<div class='btnRowContainer'>";
				echo "<svg class='arrow down' id='".$buttonCounter."down'>
					<g
  					    inkscape:label='Layer 1'
    					inkscape:groupmode='layer'
   						id='layer1'>
   					<path
    				    style='fill:#b3b3b3;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1'
						d='m 328.57143,55.219348 -140,180.000002 110,-60 0,145.71429 60,0 0,-145.71429 110,60 z'
     					id='path4601'
      				 	transform='scale(.1)'; 
      					inkscape:connector-curvature='0' /> </g>
				
				</svg>";
				echo "</div>";
			}
		
		?>
	</div>

</div> <!-- End of the frame-->
<div id="levelSelector"></div>





<?php
echo "<script>"; 
//LEFT FUNCTIONS
$scriptCounter = 0;
$varCounter = 0;
$appendCounter = 0;

while ($scriptCounter < $squareRoot){

	$scriptCounter++;
	
	echo "\$('svg#".$scriptCounter."left').click(function(){\n";
	
	while ($varCounter < ($squareRoot*$scriptCounter)){
		$varCounter++;
		echo "var pos$varCounter = document.getElementById('pos$varCounter').getElementsByTagName('div')[0];\n";
	}
	
	while ($appendCounter <($squareRoot*$scriptCounter)){
		$appendCounter++;
		$newPos = ($appendCounter+1) % $squareRoot;
		if ($newPos==0){
			$newPos= $squareRoot;
		}
		$newPos = $newPos + ($squareRoot*($scriptCounter-1));
		echo "\$('#pos$appendCounter').append(pos$newPos);\n";
	}

echo "});\n\n";
}

//RIGHT FUNCTIONS
$scriptCounter = 0;
$varCounter = 0;
$appendCounter = 0;

while ($scriptCounter < $squareRoot){

	$scriptCounter++;
	
	echo "\$('svg#".$scriptCounter."right').click(function(){\n";
	
	while ($varCounter < ($squareRoot*$scriptCounter)){
		$varCounter++;
		echo "var pos$varCounter = document.getElementById('pos$varCounter').getElementsByTagName('div')[0];\n";
	}
	
	while ($appendCounter <($squareRoot*$scriptCounter)){
		$appendCounter++;
		$newPos = ($appendCounter-1) % $squareRoot;
		if ($newPos==0){
			$newPos= $squareRoot;
		}
		$newPos = $newPos + ($squareRoot*($scriptCounter-1));
		echo "\$('#pos$appendCounter').append(pos$newPos);\n";
	}

echo "});\n\n";


}
//DOWN FUNCTIONS
$scriptCounter = 0;
$appendCounter = 0;

while ($scriptCounter < $squareRoot){
	$scriptCounter++;
	$posCounter = $scriptCounter;
	echo "\$('svg#".$scriptCounter."down').click(function(){\n";

	while ($posCounter <= ($squareRoot*$squareRoot)){
		echo "var pos$posCounter = document.getElementById('pos$posCounter').getElementsByTagName('div')[0];\n";
		$posCounter = $posCounter + $squareRoot;

	}
	
	$posCounter = $scriptCounter;
	
	while ($posCounter <= ($squareRoot*$squareRoot)){
		$newPos = $posCounter-$squareRoot;
		if ($newPos <= 0){
			$newPos = $squareRoot*$squareRoot + $newPos;
		}
		echo "\$('#pos$posCounter').append(pos$newPos);\n";
		$posCounter = $posCounter + $squareRoot;
	}

echo "});\n\n";
}



//UP FUNCTIONS
$scriptCounter = 0;
$appendCounter = 0;

while ($scriptCounter < $squareRoot){
	$scriptCounter++;
	$posCounter = $scriptCounter;
	echo "\$('svg#".$scriptCounter."up').click(function(){\n";

	while ($posCounter <= ($squareRoot*$squareRoot)){
		echo "var pos$posCounter = document.getElementById('pos$posCounter').getElementsByTagName('div')[0];\n";
		$posCounter = $posCounter + $squareRoot;

	}
	
	$posCounter = $scriptCounter;
	
	while ($posCounter <= ($squareRoot*$squareRoot)){
		$newPos = $posCounter+$squareRoot;
		if ($newPos > $squareRoot*$squareRoot){
			$newPos = $newPos - ($squareRoot*$squareRoot) ;
		}
		echo "\$('#pos$posCounter').append(pos$newPos);\n";
		$posCounter = $posCounter + $squareRoot;
	}

echo "});\n\n";
}

echo "</script>";
 ?>


<?php //Level Complete Function - generates based on level.

echo "<script>";
echo "$('svg').click(function(){";
echo "if(";

$first=true;  
foreach ($$levelA as $key => $value){
	foreach ($value as $value2){
	if($first){
		$first=false;
			echo "$('#pos$value2 > div.$key').length\n";
		} else {
			echo "&& $('#pos$value2 > div.$key').length\n";
		}
	}
}

echo "){";
?>
$( "#levelSelector" ).load( "levelSelector.php" );

value_or_null = (document.cookie.match(/^(?:.*;)?savedLevel=([^;]+)(?:.*)?$/)||[,null])[1];

	if ((value_or_null) && value_or_null <= <?php echo $_POST['level'];?>){
		document.cookie = "savedLevel=<?php echo $_POST['level'];?>";
	}
$(".cell")
			.toggleClass("levelComplete")
			.fadeIn("slow")
			.delay(1000)
			.queue(function(){
				$(".cell").toggleClass("levelComplete").dequeue();
				})
			.queue(function(){
				$("#levelSelector")
					.toggle()
					.dequeue()
					.fadeIn(1000);
			
			});
  }
});
</script>

</body>
</html>