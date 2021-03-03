<?php 
	//str_replace ( array|string $search , array|string $replace , string|array $subject , int &$count = null ) : string|array

	$win_path = "\appliation\api\helpers\api\common_helper.php";
	$unix_path = str_replace("\\", "/", $win_path);
	echo $win_path."<br>";
	echo $unix_path."<br><br>";


	$with_space = "I will always remember you";
	$with_love = str_replace(' ', '❤', $with_space);

	echo $with_space."<br>";
	echo $with_love."<br>";

	echo "<h1>"."🎂"."</h1>";
 ?>