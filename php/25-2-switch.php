<?php
	$fruit = "apple";

	switch($fruit){
		case "apple":
			echo "apple";
		case "grape":
			echo "grape";
		break;
		case "orange":
			echo "orange";
		break;
		default :
			echo "no fruit has been found";
		break;
	}
	//output:
	//applegrape
?>