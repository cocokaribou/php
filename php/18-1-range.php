<?php
	//range(string|int|float$start, string|int|float $end, int|float $step = 1) : array
	//create an array containing a range of elements
	//start - fist value of the sequence
	//end - the sequence is ended upon reaching the end value
	//step - if a step value is given, it will be used as the increment between elements in the sequence. default = 1
	//returns an array of elements from start to end, inclusive.

	$num = range('a','z');
	echo"<pre>";
	var_dump($num);
	echo "</pre>";


	$float = range(-2.0, 5.45);
	echo "<pre>";
	var_dump($float);
	echo "</pre>";
	// array(8) {
	//   [0]=>
	//   float(-2)
	//   [1]=>
	//   float(-1)
	//   [2]=>
	//   float(0)
	//   [3]=>
	//   float(1)
	//   [4]=>
	//   float(2)
	//   [5]=>
	//   float(3)
	//   [6]=>
	//   float(4)
	//   [7]=>
	//   float(5)
	// }
?>