<?php 
	
	$str = " the quick red fox jumps over the lazy dog ";
	echo "|".$str."|";
	echo "<br>";
	echo "|".trim($str)."|";
	echo "<br>";
	echo "|".ltrim($str)."|";
	echo "<br>";
	echo "|".rtrim($str)."|";


	//output
	// | the quick red fox jumps over the lazy dog |
	// |the quick red fox jumps over the lazy dog|
	// |the quick red fox jumps over the lazy dog |
	// | the quick red fox jumps over the lazy dog|
 ?>