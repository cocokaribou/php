<?php
	$str = "string";
	echo "before data type conversion = ".gettype($str)."<br>";

	$str = (int)$str;
	echo "after data type conversion = ".gettype($str)."<br>";

	echo $str; //0
?>