<?php
	$dr = array();
	
	//initialize index
	$dr['continent'] = array();
	
	$dr['continent']['america'] = array();
	$dr['continent']['america'][0] = "USA";
	$dr['continent']['america'][1] = "Mexico";

	$dr['continent']['asia'] = array();
	$dr['continent']['asia'][0] = "HongKong";
	$dr['continent']['asia'][1] = "South Korea";
	$dr['continent']['asia'][2] = "India";

	$dr['continent']['europe'] = array();
	$dr['continent']['europe'][0] = "Germany";
	$dr['continent']['europe'][1] = "France";

	$america_length = count($dr['continent']['america']);
	$asia_length = count($dr['continent']['asia']);
	$euro_length = count($dr['continent']['europe']);

	echo "countries in america<br>";
	for($x=0; $x<$america_length; $x++){
		echo $dr['continent']['america'][$x];
		echo "<br>";
	}

	echo "countries in asia<br>";
	for($x=0; $x<$asia_length; $x++){
		echo $dr['continent']['asia'][$x];
		echo "<br>";
	}

	echo "countries in europe<br>";
	for($x=0; $x<$euro_length; $x++){
		echo $dr['continent']['europe'][$x];
		echo "<br>";
	}
?>