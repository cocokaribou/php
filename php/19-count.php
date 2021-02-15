<?php
	//count(Countable|array $value, int $mode = COUNT_NORMAL) : int
	//count all elelments in an array, or something in an object

	//value - an array or Countable object
	//mode - if the optional mode parameter is set to COUNT_RECURSIVE(or 1), count() will recursively count the array. This is particularly useful for counting all the elements of a multidimensional array.

	$arr = range(1, 20, 3); //[1, 4, 7...19]
	$arr_length = count($arr);
	echo "[";
	for($x = 0; $x<$arr_length; $x++){
		echo $arr[$x];
		if($x != $arr_length-1){
			echo ", ";
		}
	}
	echo "]<br>";
	echo "arr1 length = ".count($arr)."<br>";

	//using mode variable

	$arr2['continent']['asia'] = array();
	array_push($arr2['continent']['asia'], 'korea', 'india', 'china', 'japan');
	
	echo "<pre>";
	echo var_dump($arr2);
	echo "</pre>";

	echo "arr2 length = ".count($arr2)."<br>";//1
	echo "arr2 length (count_recursive)= ".count($arr2, 1);//6
?>