<?php
	for($i=2;$i<=3;$i++){
		echo "{$i} table<br>";

		for($n =1; $n<=9; $n++){
			$mul = $i * $n;
			echo "$i * $n = $mul<br>";
		}
		echo "<br><br>";
	}
?>
