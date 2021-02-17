<?php

	$sum = 0;
	$maxValue = 50;
	for($i =1; $i<= $maxValue; $i++){
		if($i % 2 == 0){
			$sum += $i;
		}
	}

	echo "the sum of even numbers between 1 to $maxValue is $sum";

	//echo 'the sum of even numbers between 1 to $maxValue is $sum'; doesn't get the value
?>
