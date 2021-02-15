<?php
	//array_push(array $array, mixed...$values) : int;
	//array - the input array
	//values - the values to push onto the end of the array.
	//returns the new number of elements in the array.

	

	$fruit = array();

	array_push($fruit, 'apple', 'mango', 'banana', 'grape', 'tangerine');

	$arr_length = count($fruit);

	echo 'the list of fruits<br>';
	for($x = 0; $x<$arr_length; $x++){
		echo $fruit[$x];
		echo " ";
	}

	echo '<br>print again using foreach<br>';
	foreach($fruit as $x){
		echo $x;
		echo " ";
	}
?>