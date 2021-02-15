<?php
	$str = "123string";
	echo "\$str = \"".$str."\"<br>";
	echo "before data type conversion = ".gettype($str)."<br>";

	$str = (int)$str;
	echo "\$str = (int)\$str<br>";
	echo "after data type conversion = ".gettype($str)."<br>";

	echo "\$str = ".$str;

?>