<?php
	//list(mixed $var, mixed...$vars = ?) : array
	//like array(), this is not really a function, but a language construct.
	//list() is designed to assign a list of variables in one operation.
	//var - a variable
	//vars - further variables
	//returns the assigned array

	$fruit = array();
	$fruit = ['grape', 'strawberry', 'lemon'];
	list($first, $second, $third) = $fruit;

	echo $third; //lemon
?>