<?php
	
	//define array
	$earth = array();

	//initialize array element
	$earth[0] = 'korea';
	echo "earth array[0] = ".$earth[0].'<br>';

	//initialize2
	$earth['nation'] = 'japan';
	echo "earth array['nation'] = ".$earth['nation']."<br><br>";

	//initialize3
	$earth = array('nation1' => 'korea', 'nation2' => 'japan', 'nation3' => "singapore");
	echo "earth array['nation1'] = ".$earth['nation1']."<br>";
	echo "earth array['nation2'] = ".$earth['nation2']."<br>";
	echo "earth array['nation3'] = ".$earth['nation3']."<br><br>";

	//initialize4
	$earth = array('korea', 'japan', 'singapore');
	echo "earth array[0] = ".$earth[0]."<br>";
	echo "earth array[1] = ".$earth[1]."<br>";
	echo "earth array[2] = ".$earth[2]."<br>";

	//in php, array index is also called a 'key'


	//https://www.php.net/manual/en/language.types.array.php

	//An array in PHP is actually an ordered map.
	//A map is a type that associates valus to keys.
	//This type is optimized for several different uses; it can be treated as an array, list(vector),hash table(an implementation of a map),dictionary, collection, stack, queue, and probably more.
	//As array values can be other arrays, trees and multidimensional arrays are also possible.


?>