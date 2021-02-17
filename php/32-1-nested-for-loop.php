<?php
	for($i =1; $i<=3; $i++){
		echo "outer loop count : $i<br>";

		for($n = 1; $n<=3; $n++){
			echo "nested loop count: $n<br>";
		}
		echo '<br>';
	}
?>