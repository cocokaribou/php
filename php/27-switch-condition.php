<?php
	$age = 100;
	echo "the age is $age<br>";

	switch($age){
		case($age >= 10 && $age <=19):
			echo "the person is teenager";
			break;
		case($age >=20 && $age <=29):
			echo "the person is in his 20s";
			break;
		case($age >=30 && $age <=39):
			echo "the person is in his 30s";
			break;
		case($age >=40 && $age <49):
			echo "the person is in his 40s";
			break;
		default:
			echo "you'd be long dead in elephant years";
	}

?>