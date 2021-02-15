<?php
	//addition operator

	$sum = 5+5;
	echo '5+5 equals '.$sum.'<br>';
	//subtraction operator

	$sub = 5-6;
	echo '5-6 equals '.$sub.'<br>';
	//multiplication operator

	$mul = 5*3;
	echo '5*3 equals '.$mul.'<br>';
	//division operator

	$div = 5/4;
	echo '5/4 equals '.$div.'<br>';
	//modulo operator

	$mod = 5%4;
	echo '5%4 equals '.$mod.'<br>';

	$div_by_zero = 5/0;
	echo '5/0 equals'.$div_by_zero;
	//output:
	//Fatal error: Uncaught DivisionByZeroError: Division by zero in C:\xampp\htdocs\php\8-operator.php:23 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php\8-operator.php on line 23

?>