<?php
	$gender = "woman";
	$like = "tart";

	if($gender == "man"){
		echo "not a woman";
	}else switch($like){
		case "cake":
			echo "she likes cake";
			break;
		case "macaron":
			echo "she likes macaron";
			break;
		case "pudding":
			echo "she likes pudding";
			break;
		default:
			echo "she doesn't like desert in general";

	}

?>