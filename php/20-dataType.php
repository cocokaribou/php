<?php
	//php data types

	//Booleans
	//Integers
	//Floating point numbers
	//Strings
	//Numeric strings
	//Arrays
	//Iterables
	//Objects
	//Resources
	//NULL
	//Callbacks / Callables


	//gettype(mixed $value) : string
	//Get the type of a variable
	//value - The variable being type checked
	//return - "boolean", "integer", "double", "string", "array", "object", "resource", "resource(closed)", "NULL", "unknown type"
	$num = 12;
	echo "\$num = {$num}<br>";
	echo "gettype(\$num) = ".gettype($num)."<br><br>";

	$greetings = "greetings";
	echo "\$greetings = \"{$greetings}\"<br>";
	echo "gettype(\$greetings) = ".gettype($greetings)."<br><br>";

	$numStr = "123123";
	echo "\$numStr = \"{$numStr}\"<br>";
	echo "gettype(\$numStr) = ".gettype($numStr)."<br><br>";

	$fruit = array();
	echo "\$fruit = ";
	echo var_dump($fruit);
	echo "<br>";
	echo "gettype(\$fruit) = ".gettype($fruit)."<br><br>";

	$none = null;
	echo "\$none = {$none}<br>";
	echo "gettype(\$none) = ".gettype($none)."<br><br>";

	$bool = true;
	echo "\$bool = ".$bool."<br>"; //output: $bool = 1
	echo "gettype(\$bool) = ".gettype($bool)."<br><br>";

	//echo "gettype(undefined var) = ".gettype($undefined_var)."<br><br>"; 
	//output: gettype(undefined var) = NULL

	$f = fopen("..\README.md", "r");
	echo "\$f = ".$f."<br>";
	fclose($f);
	echo "gettype(\$f) = ".gettype($f);

	//basically, whenever a resource pointer is closed, gettype will return "resource(closed)".
	//unknown type is no more supported??

?>