
</br>
Click a button below to start another level.</br>

<?php 


$squareRoot = 5;

include "levels.php";


foreach ($all5xx as $value){
	$limit = ($_COOKIE['savedLevel']+1);
	if ($value <= $limit){
	
		$levelArray = 's'.$value;
		echo 	"<div class='targetFrame'>";
		$rowCounter = 0;
		$cellCounter=0;
			while ($rowCounter < $squareRoot){
				$rowCounter++;
				echo "<div class='targetRow'>";

				while ($cellCounter<$rowCounter*$squareRoot){
					$cellCounter++;
					echo "<div class='targetCell";
					
					foreach ($$levelArray as $key => $value2)
						if (in_array($cellCounter, $value2, true )){
							echo " $key";
						}
					echo "'></div>";
					}
					echo "</div>";
				}
		echo "<form method='post'>
			<input type='submit' name='level' value='$value'/>
			</form>	</div>";
	}
}


?>
