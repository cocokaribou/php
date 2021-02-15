<?php
	//ternary operator associativity differs from C/C++
	//(Condition) ? (Statement1) : (Statement2)
	//Condition : It is the expression to be evaluated which returns a boolean value.
	//Statement1 : it is the statement to be executed if the condition results in a true state
	//Statement2 : it is the statement to be executed if the condition results in a false state


	//$a = true ? 0 : true ? 1 : 2;
	//echo '$a';
	//Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` in C:\xampp\htdocs\php\11-ternary-operator.php on line 3
	
	$a = (true ? 0 : true) ? 1 : 2;
	echo $a."<br>";

	$a = 1;
	$b = 2;
	$a = $b += 3; //$a = ($b += 3)

	echo $a."<br>".$b;	
	
?>