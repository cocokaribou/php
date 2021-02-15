<?php
	//+=
	$num = 10;
	echo '$num = '.$num."<br>";
	$num += 2;
	echo '$num +=2<br> $num = '.$num."<br><br>";

	//-=
	$num = 10;
	echo '$num = '.$num."<br>";
	$num -= 2;
	echo '$num -=2<br> $num = '.$num."<br><br>";
	
	//*=
	$num = 10;
	echo '$num = '.$num."<br>";
	$num *= 2;
	echo '$num *=2<br> $num = '.$num."<br><br>";

	// /=
	$num = 10;
	echo '$num = '.$num."<br>";
	$num /= 2;
	echo '$num /=2<br> $num = '.$num."<br><br>";
	
	//%=
	$num = 10;
	echo '$num = '.$num."<br>";
	$num %= 3;
	echo '$num %=3<br> $num = '.$num."<br><br>";
	
	//.=
	$city = "seoul";
	echo '$city = "'.$city.'"<br>';
	$city .= "city";
	echo '$city .="city"<br> $city = "'.$city	.'"<br><br>';


	//operator precedence
	echo '(5+5)*5 = ';
	echo (5+5)*5;
?>