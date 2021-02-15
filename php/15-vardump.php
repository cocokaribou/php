<?php
	//var_dump(mixed $value, mixed ... $values) : void
	//dumps information about a variable
	//value - the expression to dump
	//values - further expressions to dump

	$a = 'apple';
	echo var_dump($a)."<br>"; //string(5) "apple"

	$b = 1234;
	echo var_dump($b)."<br>"; //int(1234)

	$c = true;
	echo var_dump($c)."<br>"; //bool(true)

	$d = 3.1412;
	echo var_dump($d)."<br>"; //float(3.1412)


	$test = array();
	array_push($test, "kim", "lee", "song", "choi", "kwon");

	echo "<pre>"; 
	var_dump($test);
	echo "</pre>";

	$arr['continent']['america'] = array();
	array_push($arr['continent']['america'], "usa", "mexico");

	$arr['continent']['asia'] = array();
	array_push($arr['continent']['asia'], "hongkong", "south korea", "india");

	$arr['continent']['europe'] = array();
	array_push($arr['continent']['europe'], "germany", "france");

	echo "<pre>";
	var_dump($arr);
	echo "</pre>";
	
// array(1) {
//   ["continent"]=>
//   array(3) {
//     ["america"]=>
//     array(2) {
//       [0]=>
//       string(3) "usa"
//       [1]=>
//       string(6) "mexico"
//     }
//     ["asia"]=>
//     array(3) {
//       [0]=>
//       string(8) "hongkong"
//       [1]=>
//       string(11) "south korea"
//       [2]=>
//       string(5) "india"
//     }
//     ["europe"]=>
//     array(2) {
//       [0]=>
//       string(7) "germany"
//       [1]=>
//       string(6) "france"
//     }
//   }
// }

	echo "<pre>";
	var_dump($arr['continent']);
	echo "</pre>";

// array(3) {
//   ["america"]=>
//   array(2) {
//     [0]=>
//     string(3) "usa"
//     [1]=>
//     string(6) "mexico"
//   }
//   ["asia"]=>
//   array(3) {
//     [0]=>
//     string(8) "hongkong"
//     [1]=>
//     string(11) "south korea"
//     [2]=>
//     string(5) "india"
//   }
//   ["europe"]=>
//   array(2) {
//     [0]=>
//     string(7) "germany"
//     [1]=>
//     string(6) "france"
//   }
// }
?>